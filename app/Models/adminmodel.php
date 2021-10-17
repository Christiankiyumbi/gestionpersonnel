<?php
namespace App\Models;
use CodeIgniter\Model;

class adminmodel extends Model{
    protected $table = 't_admin';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nom','motdepasse','id'];
    protected $useTimestamps = true;
   
}