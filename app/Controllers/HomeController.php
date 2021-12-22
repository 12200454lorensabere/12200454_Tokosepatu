<?php

namespace App\Controllers;

class HomeController extends BaseController

{
    // public function __construct()
    //{   
    //    $db      = \Config\Database::connect();
    //    $builder = $db->table('sepatu');
    //}

    public function index()
    {
        // $data = [
        //    'item' => $query = $this->builder->get()
        //];
        $data = [
            'item' =>
            [
                [
                    'name' => 'nike 01',
                    'price' => 'Rp.399.000',
                    'img' => 'img01c.jpg'
                ],
                [
                    'name' => 'nike 02',
                    'price' => 'Rp.399.000',
                    'img' => 'img02.jpg'
                ],
                [
                    'name' => 'nike 03',
                    'price' => 'Rp.399.000',
                    'img' => 'img03.jpg'
                ],
            ],

        ];

        return view('home', $data);
    }
    public function about()
    {
        return view('about');
    }
}
