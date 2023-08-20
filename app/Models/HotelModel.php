<<<<<<< HEAD
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
=======
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
>>>>>>> 59b13ae2290c5f2f0f8d60c4f2e43f8e10c3dec5
}