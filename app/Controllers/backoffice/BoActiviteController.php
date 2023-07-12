<?php

namespace App\Controllers\backoffice;


use CodeIgniter\Controller;
use App\Models\Activite;
class BoActiviteController extends Controller
{
    public function doCreate(){
        $id=$this->request->getPost("id");
        $type=$this->request->getPost("type");
        $name=$this->request->getPost("name");
        $description=$this->request->getPost("description");
        $data = [
            'id'=>$id,
            'type'=> $type,
            'nom'=> $name,
            'description' => $description,
        ];
        $model=new Activite();
        $model->upsert($data);
        return redirect()->to(base_url("backoffice/BoActiviteController/list"));
    }


    public function list(){
        $model=new Activite();
        $activites=$model->getAll();
        return view('backoffice/activite/list',[
            'activites'=>$activites
        ]);
    }

    public function delete(){
        $id=$this->request->getVar("id");
        $model=new Activite();
        $model->deleteOne($id);
        return redirect()->to(base_url("backoffice/BoActiviteController/list"));
    }
}