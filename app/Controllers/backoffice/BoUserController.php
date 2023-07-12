<?php

namespace App\Controllers\backoffice;

use CodeIgniter\Controller;
use App\Models\User;
class BoUserController extends Controller
{
    public function index(){
        return redirect()->to(base_url("backoffice/BoUserController/list"));
    }
    public function list(){
        $db = db_connect();
        $query = $db->table('users')
                  ->join('user_info', 'users.id = user_info.id_user')
                  ->get();

        $result = $query->getResultArray();
        return view('backoffice/user/list',[
            'users'=>$result
        ]);
    }

    public function delete(){
        $id=$this->request->getVar("id");
        $model=new User();
        $model->deleteOne($id);
        return redirect()->to(base_url("backoffice/BoUserController/list"));
    }
}