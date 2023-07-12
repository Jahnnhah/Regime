<?php

namespace App\Models;

use CodeIgniter\Model;

class Activite extends Model
{
    // protected $table = 'APP_USER';


    protected $table = 'activites';
    protected $primaryKey = 'id';
    protected $allowedFields = ['type','nom','description'];
    // protected $allowedFields = ['username', 'password'];

    // public function getUserByUsername($username)
    // {
    //     return $this->where('username', $username)->first();
    // }

    public function upsert($data){
        if($data['id']){
            $this->update($data['id'], ['type' => $data['type'], 'nom' => $data['nom'],'description'=>$data['description']]);
        }else{
            $this->insert($data);
        }
    }

    public function getAll(){
        return $this->findAll();
    }

    public function deleteOne($id){
        $this->delete($id);
    }
}

