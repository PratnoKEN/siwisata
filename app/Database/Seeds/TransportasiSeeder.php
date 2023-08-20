<<<<<<< HEAD
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransportasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_bis' => 'Bis Eksekutif',
                'harga' => 100000,
                'tujuan_awal' => 'Surabaya',
                'tujuan_akhir' => 'Malang',
                'gambar' => 'bis_eksekutif.jpg',
                'fasilitas' => 'AC, Wi-Fi, Tempat Duduk Nyaman',
            ],
            [
                'nama_bis' => 'Bis Reguler',
                'harga' => 75000,
                'tujuan_awal' => 'Jakarta',
                'tujuan_akhir' => 'Bandung',
                'gambar' => 'bis_reguler.jpg',
                'fasilitas' => 'AC, Tempat Duduk Standard',
            ],
            [
                'nama_bis' => 'Bis Pariwisata',
                'harga' => 120000,
                'tujuan_awal' => 'Bali',
                'tujuan_akhir' => 'Yogyakarta',
                'gambar' => 'bis_pariwisata.jpg',
                'fasilitas' => 'AC, Wi-Fi, Tempat Duduk Nyaman, Toilet',
            ],
        ];

        // Insert data
        $this->db->table('transportasi')->insertBatch($data);
    }
=======
<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransportasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_bis' => 'Bis Eksekutif',
                'harga' => 100000,
                'tujuan_awal' => 'Surabaya',
                'tujuan_akhir' => 'Malang',
                'gambar' => 'bis_eksekutif.jpg',
                'fasilitas' => 'AC, Wi-Fi, Tempat Duduk Nyaman',
            ],
            [
                'nama_bis' => 'Bis Reguler',
                'harga' => 75000,
                'tujuan_awal' => 'Jakarta',
                'tujuan_akhir' => 'Bandung',
                'gambar' => 'bis_reguler.jpg',
                'fasilitas' => 'AC, Tempat Duduk Standard',
            ],
            [
                'nama_bis' => 'Bis Pariwisata',
                'harga' => 120000,
                'tujuan_awal' => 'Bali',
                'tujuan_akhir' => 'Yogyakarta',
                'gambar' => 'bis_pariwisata.jpg',
                'fasilitas' => 'AC, Wi-Fi, Tempat Duduk Nyaman, Toilet',
            ],
        ];

        // Insert data
        $this->db->table('transportasi')->insertBatch($data);
    }
>>>>>>> 59b13ae2290c5f2f0f8d60c4f2e43f8e10c3dec5
}