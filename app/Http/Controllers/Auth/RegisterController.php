<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Geocoder\Location;
use App\Http\Controllers\ContactController;
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
//            'email' => ['required', 'string', 'EmailAddress', 'max:255', 'unique:customer'],
            'delivery' => 'required_unless: pick_up,',
            'pick_up' => 'required_unless: delivery,'
        ]);
        if($validator->fails()) {
            return redirect('signUp')->withErrors($validator)->withInput();
        }
        $request['accountNumber'] = $this->getAccountNumber();
        $this->insertQuery($request);
        (new ContactController())->create($request);
        $email = ['email'=>$request['email']];
        $this->sendEmail($request);

        return view('registerConfirmation', $email);
    }

    private function insertQuery($request) : void
    {
        $coordinates = (new Location())->getCoordinates($request);
        $password = Hash::make($request['password']);

        $user = (new User());
        $user->FirstName =  $request['first_name'];
        $user->LastName =  $request['last_name'];
        $user->EmailAddress =  $request['email'];
        $user->PasswordHash = $password;
        $user->PasswordSalt = $password;
        $user->AccountNumber = $request['accountNumber'];
        $user->AddressLine1 = $request['primary_address'];
        $user->AddressLatitude = $coordinates['latitude'];
        $user->AddressLongitude = $coordinates['longitude'];
        $user->AddressLine2 = $request['secondary_address'];
        $user->City = $request['city'];
        $user->Country = $request['country'];
        $user->PrimaryPhoneNumber = $request['primary_telephone'];
        $user->AlternatePhoneNumber = $request['secondary_telephone'] ?? '';
        $user->IdentificationNumber = $request['id_number'];
        $user->IdentificationType = $request['id_type'];
        $user->DeliveryCountry = $request['delivery_country'];
        $user->Heard = $request['heard'];
        $user->IsDelivery = !empty($request['delivery']) ? 1: 0;
        $user->IsPickUp = !empty($request['pick_up']) ? 1 : 0;
        $user->timestamps = false;
        $user->save();
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

    private function getAccountNumber()
    {
        $accoutNumber = random_int(500, 999999);
        if(!empty($this->checkAccountNumberDuplicates($accoutNumber))) {
            $this->getAccountNumber();
        }
        return $accoutNumber;
    }

    private function checkAccountNumberDuplicates($accountNumber)
    {
        $accounts = \DB::table('customer')
            ->select('CustomerId')
            ->where('AccountNumber', '=', $accountNumber)
            ->first();
        return $accounts->CustomerId ?? '';
    }
}
