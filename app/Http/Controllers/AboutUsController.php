<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function sendMessage(Type $var = null)
    {
        echo 'Hello from the controller! ;-)';
    }
}
