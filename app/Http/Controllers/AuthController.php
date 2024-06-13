<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class AuthController extends Controller
{
    //EMAIL VERIFICATION VIEW LINK
    public function verify(){
        return view('auth.verify-email');
    }

    // EMAIL VERIFICATION HANDLER
    public function handler(EmailVerificationRequest $request){
        $request->fulfill();

        return redirect('/home');
    }

    // RESEND EMAIL VERICATION
    public function resend(Request $request){
        $request->user()->sendEmailVerificationNotification();

        return back()->with('message', 'Verification link sent!');
    }
}
