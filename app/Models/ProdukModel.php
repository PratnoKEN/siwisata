<?php
namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table = 'wisata';
    protected $primaryKey = 'id_wisata';
    protected $allowedFields = ['nama_wisata', 'lokasi', 'price', 'deskripsi', 'gambar'];

    public function getAllProduk()
    {
        return $this->findAll();
    }

    public function deleteProduct($id)
    {
        // Perform the deletion based on the given ID
        $this->where('id_wisata', $id)->delete();
    }
}