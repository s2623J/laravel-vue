<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use DB;

class TestController extends Controller
{
    public function test1(Type $var = null)
    {
        // echo 'Okay, you tested me.';

        $pages = Page::All();
        // $pageDetail = Page::where('id', 4)->first(); // Returns object
        // $pages = Page::where('name', 'About us')->get(); // Returns array - Apparently NOT case sensitive
        // $pages = DB::table('pages')->whereRaw('BINARY name = "About Us"')->get(); // Returns array - IS case sensitive
        // dd($pages); // Desciptive var dump
        // $page = DB::table('pages')->whereRaw('BINARY name = "About Us"')->first();


        // foreach ($pages as $page) {
        //     echo "<p>$page->name - $page->description</p>";
        // }

        return view('website.test1', ['pages' => $pages]); // Use dot notation instead of slashes
    }
}
