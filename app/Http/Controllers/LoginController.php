<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    { info('here check here pleawse:: ');
        $this->middleware('guest');
    }
    public function create(Request $request): void
    { info('here check here pleawse:: ');
        $userData = [
            'email' => $request->get('email'),
            'password' => $request->get('password'),
        ];
        //        if(Auth::attempt($userData)) {
//            return view('account');
//        }
//        return back()->with('error', 'Wrong Login Details');
    }
}
