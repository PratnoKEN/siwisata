<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PenginapanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_penginapan' => 'Luxury Resort',
                'price' => 750000,
                // Price in IDR
                'lokasi' => 'Tropical Paradise',
                'fasilitas' => 'Swimming pool, spa, restaurant',
                'deskripsi' => 'Experience a luxurious stay by the beach.',
                'gambar' => 'resort.jpg',
            ],
            [
                'nama_penginapan' => 'Cozy Cabin',
                'price' => 350000,
                // Price in IDR
                'lokasi' => 'Mountain Retreat',
                'fasilitas' => 'Fireplace, kitchenette',
                'deskripsi' => 'Escape to a cozy cabin in the mountains.',
                'gambar' => 'cabin.jpg',
            ],
            // Add more rows as needed
        ];

        // Using the db_pariwisata database group defined in Database.php
        $this->db->table('penginapan')->insertBatch($data);
    }
}