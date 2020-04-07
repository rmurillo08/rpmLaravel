<?php

namespace App\Http\Controllers\Prealert;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Users\Customer;
use App\Users\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PreAlertController extends Controller
{
    protected function insert(Request $request)
    {
//        $validator = Validator::make($request->all(), [
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'delivery' => 'required_unless: pick_up,',
//            'pick_up' => 'required_unless: delivery,'
//        ]);
//        if($validator->fails()) {
//            return redirect('signUp')->withErrors($validator)->withInput();
//        }
//        $userId = $this->insertQuery($request);
//        (new ProfileController())->create($request, $userId);
//        (new ContactController())->create($request, $userId);
//        $email = ['email'=>$request['email']];
//        $this->sendEmail($request);
info('here must be here:: ');
        return back();
    }

    private function insertQuery($request)
    {
        $user = (new Customer());
        $user->first_name =  $request['first_name'];
        $user->last_name =  $request['last_name'];
        $user->email =  $request['email'];
        $user->password = Hash::make($request['password']);
        $user->save();
        return  $user->id;
    }

    public function sendEmail($request)
    {
        $name = $request['first_name'] . ' ' . $request['last_name'];

        Mail::send('email', ['name' => ucwords($name)], function ($message) use ($request) {
            $message->from(env('MAIL_USERNAME'), 'RPM Express Couriers');
            $message->to($request['email']);
            //$message->cc(env('MAIL_USERNAME'));
            $message->subject('Welcome to RPM Family');
        });
    }
}
