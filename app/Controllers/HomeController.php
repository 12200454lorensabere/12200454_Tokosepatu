<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [
            'item' =>
            [
                [
                    'name' => 'nike 01',
                    'price' => 'Rp.399.000',
                    'img' => 'img01c.jpg'
                ], [
                    'name' => 'nike 02',
                    'price' => 'Rp.399.000',
                    'img' => 'img02.jpg'
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
