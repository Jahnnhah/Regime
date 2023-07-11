<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{

public function listRegimes()
{
    $isGold = false; // Par défaut, l'utilisateur n'a pas l'option Gold

    if ($isGold) {/* Vérifiez si l'utilisateur a l'option Gold */
        $isGold = true;
    }

    $regimeModel = new RegimeModel();
    $regimes = $regimeModel->getRegimes($isGold);

    return view('regimes_list', ['regimes' => $regimes]);
}
}
