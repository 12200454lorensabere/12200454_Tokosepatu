<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaction extends Migration
{
    public function up()
    {
        $this->forge->addfield([
    
            'harga'  => [
            ],
            'total',
            'jumlah'
            
        
        ]);
        $this->forge->addkey(id, true);
        $this->forge-createTable('user');
    }

    public function down()
    {
        //
    }
}
