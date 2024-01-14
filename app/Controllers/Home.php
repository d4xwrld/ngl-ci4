<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('ngl');
    }

    public function about()
    {
        return view('about');
    }
}
