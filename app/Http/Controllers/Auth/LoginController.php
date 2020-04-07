<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Users\Customer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home'; //RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest')->except('logout');
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }

    public function showLoginForm()
    {
        return view('home');
    }

//    public function checkLogin(LoginRequest $request)
//    {
//        $userData = [
//            'EmailAddress' => $request->get('EmailAddress'),
//            'PasswordSalt' => $request->get('PasswordSalt'),
//        ]; info('befoer the attempts');
//        if(Auth::attempt($userData)) { info('after the attempt');
//
//            return redirect()->action('AccountController@get');
//        }
//        return back()->with('error', 'Wrong Login Details');
//    }

    public function checkLogin()
    {
        $userData  = $this->validate(request(), [
            $this->username() => 'email|required|string',
            $this->getAuthPassword() => 'required|string'
        ]);
//        $userData = [
//            'EmailAddress' => $request->get('EmailAddress'),
//            'PasswordSalt' => $request->get('PasswordSalt'),
//        ];
        if (Auth::attempt(['EmailAddress'=> $userData['EmailAddress'] , 'PasswordSalt' => $userData['PasswordSalt']])) {
            return redirect()->action('AccountController@get');
        }
        return back()
            ->withErrors([$this->username() =>  trans('auth.failed')])
            ->withInput(request([$this->username()]));
    }

    private function checkCredentials($email, $password): bool
    {
        $user = \DB::table('customer')
            ->select('password')
            ->where('email', '=', $email)
            ->first();

        if(isset($user->password)) {
            $returnValue = Hash::check($password, $user->password); info('return value after hash:: ', [$returnValue]);
        }
        return $returnValue ?? false;
    }

    public function username(): string
    {
        return 'EmailAddress';
    }

    public function getAuthPassword(): string
    {
        return 'PasswordSalt';

    }

    public function logout()
    {
        Auth::logout();

        return  view('home');
    }
}
