<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function sqlqueries(Request $request)
    {
        $prdx = Product::all();
        dd($prdx);
        return "Welcome";
    }
}
