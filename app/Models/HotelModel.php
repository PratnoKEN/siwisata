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
    public function deleteHotel($id)
    {
        // Perform the deletion based on the given ID
        $this->where('id_penginapan', $id)->delete();
    }
}