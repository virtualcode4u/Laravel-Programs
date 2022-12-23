<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function check()
    {
        $chk = '13-12-2022';
        $checkval = DB::select("select DATE_FORMAT(STR_TO_DATE('".$chk."','%d-%m-%Y'),'%d-%m-%Y') as trfdt");
        return $checkval[0]->trfdt;
    }
}

