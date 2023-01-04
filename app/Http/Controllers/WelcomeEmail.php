<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\RestaurentMail;

class WelcomeEmail extends Controller
{
    //
    public function sendWelcomeEmail(){
        Mail::to('srikarprapulla@gmail.com')->send(new RestaurentMail());
        return 'Registered successfully';
    }
}
