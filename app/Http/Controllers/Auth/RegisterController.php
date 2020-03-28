<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Geocoder\Location;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthorizedUserController;
use App\Providers\RouteServiceProvider;
use App\Users\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Sendinblue\Mailin;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:customer'],
            'delivery' => 'required_unless: pick_up,',
            'pick_up' => 'required_unless: delivery,'
        ]);
        if($validator->fails()) {
            return redirect('signUp')->withErrors($validator)->withInput();
        }
        $request['accountNumber'] = random_int(500, 9999999);
        $userId = $this->insertQuery($request);
        (new ProfileController())->create($request, $userId);
        (new AuthorizedUserController())->create($request, $userId);
        $email = ['email'=>$request['email']];
        $this->sendEmail($request);

        return view('registerConfirmation', $email);
    }

    private function insertQuery($request)
    {
        //$coordinates = (new Location())->getCoordinates($request);

        $user = (new User());
        $user->first_name =  $request['first_name'];
        $user->last_name =  $request['last_name'];
        $user->email =  $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        return  $user->id;
    }

    public function sendEmail($request)
    {
        $email = $request['email'];
        $mailin = new Mailin('https://api.sendinblue.com/v2.0', env('MAIL_PASSWORD'));
        $data = array (
            'id' => 2,
            'to' =>  $email,
            'attr' => array(
                'FIRSTNAME' => $request['first_name'],
                'LASTNAME' => $request['last_name'],
                'ACCOUNTNUMBER' => $request['accountNumber']
                ),
        );
    $mailin->send_transactional_template($data);
    }
}
