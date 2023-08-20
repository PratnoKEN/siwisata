<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WisataSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_wisata' => 'Beautiful Beach',
                'lokasi' => 'Coastal Paradise',
                'price' => 250000,
                // Price in IDR
                'currency' => 'IDR',
                // Currency
                'deskripsi' => 'Enjoy the sandy beaches and crystal clear waters.',
                'gambar' => 'beach.jpg',
            ],
            [
                'nama_wisata' => 'Majestic Mountains',
                'lokasi' => 'Mountain Range',
                'price' => 399000,
                // Price in IDR
                'currency' => 'IDR',
                // Currency
                'deskripsi' => 'Experience the breathtaking views from the mountain tops.',
                'gambar' => 'mountain.jpg',
            ],
            // Add more rows as needed
        ];


        // Using the db_pariwisata database group defined in Database.php
        $this->db->table('wisata')->insertBatch($data);
    }
}