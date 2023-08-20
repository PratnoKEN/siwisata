<<<<<<< HEAD
<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'email', 'level'];

    public function getAllUser()
    {
        return $this->findAll();
    }
=======
<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password', 'email', 'level'];

    public function getAllUser()
    {
        return $this->findAll();
    }
>>>>>>> 59b13ae2290c5f2f0f8d60c4f2e43f8e10c3dec5
}