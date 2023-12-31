<?php

namespace App\Controllers\backoffice;


use CodeIgniter\Controller;
use App\Models\Regime;
class BoRegimeController extends Controller
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
        $model=new Regime();
        $model->upsert($data);
        return redirect()->to(base_url("backoffice/BoRegimeController/list"));
    }


    public function list(){
        $model=new Regime();
        $regimes=$model->getAll();
        return view('backoffice/regime/list',[
            'regimes'=>$regimes
        ]);
    }

    public function delete(){
        $id=$this->request->getVar("id");
        $model=new Regime();
        $model->deleteOne($id);
        return redirect()->to(base_url("backoffice/BoRegimeController/list"));
    }
}