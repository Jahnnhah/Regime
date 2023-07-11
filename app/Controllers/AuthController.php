<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        // Récupérer les données du formulaire de connexion
        $name = $this->request->getPost('name');
        $password = $this->request->getPost('password');

        // Valider les données du formulaire
        $validation = \Config\Services::validation();
        $validation->setRule('name', 'Nom d\'utilisateur', 'required');
        $validation->setRule('password', 'Mot de passe', 'required');

        if ($validation->withRequest($this->request)->run()) {
            // Charger le modèle User
            $model = new UserModel();

            // Rechercher l'utilisateur dans la base de données
            $user = $model->where('name', $name)->first();

            if ($user) {
                // Vérifier le mot de passe
                if (password_verify($password, $user['password'])) {
                    // Authentification réussie, vous pouvez procéder à des actions supplémentaires
                    // par exemple, définir la session utilisateur

                    // Rediriger vers une page de succès ou effectuer une autre action
                    return redirect()->to('UserController/loadChoix');
                } else {
                    // Mot de passe incorrect
                    $data['error'] = 'Mot de passe incorrect';
                    return redirect()->to('UserController/index')->with('error', $data['error']);
                }
            } else {
                // Utilisateur non trouvé
                $data['error'] = 'Nom d\'utilisateur non trouvé';
                return redirect()->to('UserController/index')->with('error', $data['error']);
            }
        } else {
            // Les données du formulaire n'ont pas passé la validation
            $data['validation'] = $validation;
            return redirect()->to('UserController/index')->withInput()->with('validation', $data['validation']);
        }
    }
}
