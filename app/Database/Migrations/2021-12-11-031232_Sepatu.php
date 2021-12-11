<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sepatu extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'id'  => [

            ],
            'username',
            'email',
            'password',
            'address'    

        ]);
        $this->forge->addkey(id, true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        //
    }
}
