<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
public function index()
{
    $statsModel = new StatsModel();
    $salesData = $statsModel->getSalesData(); // Exemple : récupérer les données de vente depuis le modèle

    return view('dashboard', ['salesData' => $salesData]);
}
// public function imc()
// {
//     return view('imc_form');
// }
}