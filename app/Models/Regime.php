<?php

namespace App\Models;

use CodeIgniter\Model;

class Regime extends Model
{
    // protected $table = 'APP_USER';


    protected $table = 'regimes';
    protected $primaryKey = 'id';
    protected $allowedFields = ['type','nom','description'];
    // protected $allowedFields = ['username', 'password'];

    // public function getUserByUsername($username)
    // {
    //     return $this->where('username', $username)->first();
    // }

    public function create($data){
        $this->insert($data);
    }

    public function getAll(){
        return $this->findAll();
    }
}

