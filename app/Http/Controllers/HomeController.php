<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Question;

class HomeController extends Controller
{
    function index()
    {
        $total=Question::count();
        Session::put("user_score", 0);
        return view("index",[
            "total" => $total
        ]);
    }
}
