<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Retur extends Migration
{
    public function up()
    {
        $this->forge->addColumn('retur', [
                 'receipt',

        ]);
        $this->forge->addkey('id', true);
        $this->forge->createTable('retur');
    }
    
    public function down()
    {
        $this->forge->dropTable('retur');
    }
}
