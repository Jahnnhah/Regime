<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

class UserControllerDiso extends Controller
{
    public function getRegimes($isGold = false)
    {
        $builder = $this->db->table('regimes');
        $builder->select('*');

        if ($isGold) {
            $builder->select('prix * 0.85 as prix');
        }

        return $builder->get()->getResultArray();
}
}