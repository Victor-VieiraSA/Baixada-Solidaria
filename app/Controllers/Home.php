<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function pontos()
    {
    return view('pontos');
    }

    public function indicar()
    {
    return view('indicar');
    }

}
