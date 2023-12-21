<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Jobs\SendEmailJob;

class SendmailController extends Controller
{
   public function sendMail()
   {
  
        $details['email'] = 'komalkhalasi.13@gmail.com';
  
        dispatch(new SendEmailJob($details));

        dd("done");
        
    }
    }
