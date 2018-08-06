<?php

namespace samenta\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        $date= [
            'title'=>'TEST EMAIL BY MAILGUN',
            'content'=>'i want to test email servises and see details and im happy:)',
        ];
        Mail::send('emailtest',$date,function($msg){
            $msg->to('negar.mmkhtri@gmail.com','miss negar')->subject('hi im tester email');
        });
    }
}