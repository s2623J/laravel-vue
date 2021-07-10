<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
    public function index(Type $var = null)
    {
        $pages = Page::All();
        $pageDetail = Page::where('id', 1)->first(); // Returns object

        return view('website.home',['pages' => $pages, 'pageDetail' => $pageDetail]); // Use dot notation instead of slashes
    }

    public function page($id)
    {
        $pages = Page::All();
        $pageDetail = Page::where('id', $id)->first(); // Returns object

        return view('website.home', 
            ['pages' => $pages, 'pageDetail' => $pageDetail]); // Use dot notation instead of slashes
    }
}
