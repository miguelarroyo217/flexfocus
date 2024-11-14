<?php namespace App\Controllers;

class PagesController extends BaseController
{
    public function about()
    {
        return view('pages/about');
    }

    public function menu()
    {
        return view('pages/menu');
    }

    public function contact()
    {
        return view('pages/contact');
    }
}
