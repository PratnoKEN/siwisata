<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePenginapanTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_penginapan' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_penginapan' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'price' => [
                'type' => 'DECIMAL',
                'constraint' => '15,2',
                // 15 digits total, 2 decimal places
            ],
            'currency' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'default' => 'IDR',
            ],

            'lokasi' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'fasilitas' => [
                'type' => 'TEXT',
            ],
            'deskripsi' => [
                'type' => 'TEXT',
            ],
            'gambar' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
        ]);

        $this->forge->addPrimaryKey('id_penginapan');
        $this->forge->createTable('penginapan');
    }

    public function down()
    {
        $this->forge->dropTable('penginapan');
    }
}