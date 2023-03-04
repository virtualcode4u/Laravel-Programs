<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\MailDemo;


class EmailController extends Controller
{
    public function index()
    {
        $sendMailData = [
            'title' => "Mail from Write2Program",
            'body' => 'This is an mail from Write2Program'
        ];
            
        Mail::to('write2program@gmail.com')->send(new MailDemo($sendMailData));
        dd('Email sent successfully!!');

    }
}
