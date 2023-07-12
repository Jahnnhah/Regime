<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\UserInfo;
use App\Models\Objectif;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function find()
    {
        $userModel=new User();
        $users = $userModel->findAll();
        return view('users', ['users' => $users]);
    }

    public function registrationForm(){

        return view('register');
    }

    public function doRegister(){
        
        $userModel=new User();
        $name=$this->request->getPOST('name');
        $uname=$this->request->getPOST('uname');
        $password=$this->request->getPOST('password');
        $data=[
            'user_name'=>$uname,
            'password'=>password_hash($password,PASSWORD_BCRYPT),
            'name'=>$name
        ];
        
        $userModel->insert($data);
        $insertedId = $userModel->insertID();
        $this->session->set('ui', $insertedId);

        return redirect()->to(base_url("UserController/info"));

    }

    public function saveInfo(){
        
        $model=new UserInfo();
        $poids=$this->request->getPOST('poids');
        $taille=$this->request->getPOST('taille');
        $genre=$this->request->getPOST('genre');
        $age=$this->request->getPOST('age');
        
        $data=[
            'id_user'=>$this->session->get('ui'),
            'poids'=>$poids,
            'taille'=>$taille,
            'genre'=>$genre,
            'age'=>$age
        ];
        
        $model->insert($data);

        return redirect()->to(base_url("UserController/loadChoix"));

    }

    public function index(){
        return view('index');
    }
    public function doLogin(){
        $userModel=new User();
        $uname=$this->request->getPOST('uname');
        $password=$this->request->getPOST('password');

        $result=$userModel->where('user_name',$uname)->first();
        if($result){
            //compare hash password
            if(password_verify($password,$result["password"])){
                $this->session->set('ui',$result["id"]);
                
                if($result["user_name"]==="admin"){
                    // si user admin
                    $this->session->set('urole','admin');
                    return redirect()->to(base_url("backoffice/BoUserController"));
                }else{
                    // si user simple
                    $this->session->set('urole','user');
                    return redirect()->to(base_url("UserController/loadProposition"));
                }
                
            }else{
                return redirect()->to(base_url("UserController"))->with('error', 'wrong password');
            }
        }else{
            return redirect()->to(base_url("UserController"))->with('error', 'password does not exist');
        }
    }
    public function loadChoix(){
        return view ('choix');
    }

    public function doChoix(){
        $model=new Objectif();
        $choix=$this->request->getPOST('choix');
        $data=[
            'utilisateur_id'=>$this->session->get('ui'),
            'objectif'=>$choix
        ];

        var_dump($data);
        
        $model->insert($data);
        return redirect()->to(base_url("UserController/loadProposition"));
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

    public function logout(){
        $this->session = \Config\Services::session();
        $this->session->remove('ui');
        $this->session->remove('urole');
        return redirect()->to(base_url("UserController"));
    }
}
