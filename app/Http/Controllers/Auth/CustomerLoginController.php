<?php


namespace App\Http\Controllers\Auth;

    use Illuminate\Support\Facades\Auth;
    use App\Http\Controllers\Auth\LoginController as DefaultLoginController;

class CustomerLoginController extends DefaultLoginController
{
    protected $redirectTo = '/account';

    public function __construct()
    {
        $this->middleware('guest:customer')->except('logout');
    }
    public function showLoginForm()
    {
        return view('account');
    }

    public function username() : string
    {
        return 'employee_id';
    }

    protected function guard()
    {
        return Auth::guard('customer');
    }
}
