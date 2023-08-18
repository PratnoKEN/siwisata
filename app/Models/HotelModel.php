<?php
namespace App\Models;

use CodeIgniter\Model;

class HotelModel extends Model
{
    protected $table = 'penginapan';
    protected $primaryKey = 'id_penginapan';
    protected $allowedFields = ['nama_penginapan', 'lokasi', 'price', 'deskripsi', 'gambar'];

    public function getAllHotel()
    {
        return $this->findAll();
    }
}