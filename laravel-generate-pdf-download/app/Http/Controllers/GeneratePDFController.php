<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PDF;

class GeneratePDFController extends Controller
{
    public function GeneratePDFFile()
    {
        $users_data = User::get();
        $data = [
            'title' => 'Welcome to W2P IT Software',
            'GenDate' => date('d-m-Y'),
            'users' => $users_data
        ];

        $load_pdf = PDF::loadView('welcome',$data);

        return $load_pdf->download('w2pitsoftwarestudentslist.pdf');
    }
}
