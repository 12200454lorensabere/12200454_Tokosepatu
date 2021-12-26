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
                    'name' => '01',
                    'price' => 'Rp.350.000',
                    'img' => 'img01c.jpg'
                ],
                [
                    'name' => '02',
                    'price' => 'Rp.349.000',
                    'img' => 'img02.jpg'
                ],
                [
                    'name' => '03',
                    'price' => 'Rp.399.000',
                    'img' => 'img03.jpg'
                ],
                [
                    'name' => '04',
                    'price' => 'Rp.409.000',
                    'img' => 'img06.jpg'
                ],
                [
                    'name' => '05',
                    'price' => 'Rp.409.000',
                    'img' => 'img07.jpg'
                ],
                [
                    'name' => '06',
                    'price' => 'Rp.423.000',
                    'img' => 'asics.jpg'
                ],
                [
                    'name' => '07',
                    'price' => 'Rp.453.000',
                    'img' => 'skechers.jpg'
                ],
                [
                    'name' => '08',
                    'price' => 'Rp.409.000',
                    'img' => 'img08.jpg'
                ]


            ],

        ];

        return view('home', $data);
    }
    public function about()
    {
        return view('about');
    }
}
