<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        $pagename = 'Home';

        return view('home', [
            'page_name' => $pagename
        ]);
    }
}
