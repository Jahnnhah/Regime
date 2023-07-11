<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

class IMCController extends Controller{public function calculate()
    {
        $weight = $this->request->getPost('weight');
        $height = $this->request->getPost('height') / 100; // Convertir la taille en mètres
    
        $imc = $weight / ($height * $height);
    
        return view('imc_result', ['imc' => $imc]);
    }}


