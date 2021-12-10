<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addColumn('transaction_details',[
            'merk',
            'harga',
            'jumlah',
            'total',
        ]);
        $this->forge->addkey('transaction_details', true);
        $this->forge->createTable('transaction_details');
        
    }

    public function down()
    {
        $this->forge->dropTable('transaction_details');
    }
}