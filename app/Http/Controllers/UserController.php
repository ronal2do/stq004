<?php

namespace App\Http\Controllers;

use Mail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Send an e-mail reminder to the user.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function sendEmailReminder()
    {
        $user = User::save();

        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->to($user->email)->subject('Your Reminder!');
        });
    }
}