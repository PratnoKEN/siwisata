<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransportasiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_bis' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 10,
            ],
            'tujuan_awal' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'tujuan_akhir' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'fasilitas' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('transportasi');
    }

    public function down()
    {
        $this->forge->dropTable('transportasi');
    }
}