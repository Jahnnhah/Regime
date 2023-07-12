<?php
namespace App\Models;

use CodeIgniter\Model;

class Objectif extends Model
{
    protected $table  ='objectifs';

    // protected $useAutoIncrement = true;

    // protected $returnType =  'object';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['utilisateur_id','objectif'];

    // protected $useTimestamps = false;
    // protected $createdField = 'created_at';
    // protected $updatedField = 'updated_at';
    // protected $deletedField = 'deleted_at';

    // protected $validationRules = [];
    // protected $validationMessages = [];
    // protected $skipValidation = false;

}