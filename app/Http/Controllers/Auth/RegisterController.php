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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(Request $request)
    {
        $userId = $this->insertQuery($request);
        (new ProfileController())->create($request, $userId);
        (new AuthorizedUserController())->create($request, $userId);
        $email = ['email'=>$request['email']];
        return view('registerConfirmation', $email);
    }

    private function insertQuery($request)
    {
        $coordinates = (new Location())->getCoordinates($request); info('coordinates:: ', [$coordinates]);

        $user = (new User());
        $user->first_name =  $request['first_name'];
        $user->last_name =  $request['last_name'];
        $user->email =  $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        return  $user->id;
    }
}
