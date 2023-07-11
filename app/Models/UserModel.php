<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table  ='users';
    protected $primarykey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType =  'object';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['user_name','password','created_at','updated_at'];

    protected $useTimestamps = false;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;

}