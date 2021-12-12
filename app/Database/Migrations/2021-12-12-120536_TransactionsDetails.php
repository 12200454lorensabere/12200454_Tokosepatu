<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransactionsDetails extends Migration
{
    public function up()
    {
        $this->forge->addColumn('transaction_details', [
            'merk',
            'harga',
            'jumlah',
            'total'
        ]);
        $this->forge->addKey('merk', true);
        $this->forge->createTable('transaction_details');
    }

    public function down()
    {
        $this->forge->dropTable('transactions_details');
    }
}
