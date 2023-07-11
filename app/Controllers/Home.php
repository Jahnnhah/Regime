<?php

namespace App\Controllers;

use \App\Models\UserModel;

class Home extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function register()
	{
		return view('signup');
	}

	public function do_register(){
		$userModel = new UserModel();

		$name = $this->request->$_Post('name');
		$uname = $this->request->$_Post('uname');
		$password = $this->request->$_Post('password');
		$re_password = $this->request->$_Post('re_password');

		$data = ['name'=>$name,'uname' => $uname,'password' => $password,'re_password' => $re_password
		];

		$r = $userModel->insert($data);

		if($r){
			echo "User Registrated successfully";
		}
		else{
			echo "Error during registration";
		}
	}
}
