<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function feedback()
    {
        return view('users.feedback');
    }

    public function getData()
    {
        return view('users.data');
    }
}
