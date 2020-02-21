<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class EmailController extends Controller
{
    public function sendEmail()
    {
//        Mail::to('shrivastvatarun@gmail.com')->send(new SendMailable());
//        echo 'email sent';
//        dispatch(new SendEmailJob());
//        echo '<br> email sent 2';
        $emailJob = (new SendEmailJob())->delay(Carbon::now()->addSeconds(3));
        dispatch($emailJob);

        echo '<br> email sent 3';
    }
}
