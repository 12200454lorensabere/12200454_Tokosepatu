<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Shoes extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'data produk'  => [

            ],
            'pesanan',
            'member',
            'user'
               

        ]);
        $this->forge->addkey(id, true);
        $this->forge->createTable('users');

    }

    public function down()
    {
        //
    }
}
