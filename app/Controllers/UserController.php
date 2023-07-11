<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;

class UserController extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel=new UserModel();
    }

    public function find()
    {
        $users = $this->userModel->findAll();
        return view('users', ['users' => $users]);
    }

    public function registrationForm(){

        return view('register');
    }

    public function doRegister(){
        // $this->input->post('nom_user');
        $name=$this->request->getPOST('name');
        $pwd=$this->request->getPOST('pwd');
        $this->userModel->login($name,$pwd);
        

        echo "doRegister";

    }

    public function index(){
        return view('index');
    }
    public function doLogin(){
        echo "Form submited";
    }
    public function loadChoix(){
        return view ('choix');
    }
    public function loadProposition(){
        return view ('proposition');
    }
    public function imc()
    {
        return view('imc_form');
    }
    public function info()
    {
        return view('information');
    }
}
