<?php

namespace App\Http\Controllers;

use App\Jobs\SendTestEmail;
use App\Mail\TestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function send(){
        SendTestEmail::dispatch();
        return "Email sent successfully";
    }
}
