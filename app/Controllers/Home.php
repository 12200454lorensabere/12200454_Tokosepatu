<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('layout/header');
        echo view('welcome_message');
        echo view('layout/footer');
    }
    public function about()
    {
        echo view('layout/header');
        echo view('about');
        echo view('layout/footer');
    }
}
