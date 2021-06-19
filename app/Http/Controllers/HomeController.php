<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class HomeController extends Controller
{
    public function index() {
        // echo 'Hello There! ;-)';
        // return view('home');
        // $pages = Page::where('id', 1)->first();
        $pages = Page::All();
        $pageDetail = Page::where('id', 1)->first();

        return view('website/home', ['pages' => $pages, 'pageDetail' => $pageDetail]);
    }

    public function page($pageId) {
        $pages = Page::All();
        $pageDetail = Page::where('id', $pageId)->first();

        return view('website/home', ['pages' => $pages, 'pageDetail' => $pageDetail]);
    }
}
