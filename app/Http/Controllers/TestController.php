<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Page;

class TestController extends Controller
{
    public function test1()
    {
        // echo 'Test1 method is launched';

        // $pages = Page::all();
        $pages = Page::where('id', 1)->first();

        // dd($pages); // Same as die/execute & die

        // echo 'Hello! ;-)'; // Will not be executed after dd();

        echo $pages->name . ': ' . $pages->description;

        // foreach ($pages as $page) {
        //     echo($page->name . ' - ' . $page->description);
        //     echo '<br>';
        // }
    }
}
