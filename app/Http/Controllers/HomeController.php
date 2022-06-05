<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Special;

class HomeController extends Controller
{
    public function index(Type $var = null)
    {
        $pages = Page::All();
        $pageDetail = Page::where('id', 1)->first(); // Returns object

        return view('website.home',[
            'pages' => $pages, 
            'pageDetail' => $pageDetail, 
        ]); // Use dot notation instead of slashes
    }

    public function page($id)
    {
        $pages = Page::All();
        $pageDetail = Page::where('id', $id)->first(); // Returns object
        $specials = Special::All();

        return view('website.home', [
            'pages' => $pages, 
            'pageDetail' => $pageDetail, 
            'specials' => $specials
        ]); // Use dot notation instead of slashes
    }

    public function specialEntry($id)
    {
        $special = Special::where('id', $id)->first();
        // dd($special);
        return view('website.special-entry', ['special' => $special]); // All variables to view in this array
    }
}
