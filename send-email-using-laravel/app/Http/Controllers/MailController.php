<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\DemoMail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => "Mail froom Write2Program",
            'body' => "This is test Mail from Write2Program"
        ];

        Mail::to('write2program@gmail.com')->send(new DemoMail($mailData));
        dd("Email Sent Successfully!!!");
    }
}
