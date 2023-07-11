<?php

namespace App\Controllers\backoffice;


use CodeIgniter\Controller;
use App\Models\Regime;
class BoRegimeController extends Controller
{
    public function create()
    {
        return view('backoffice/regime/create');
    }

    public function doCreate(){
        $type=$this->request->getPost("type");
        $name=$this->request->getPost("name");
        $description=$this->request->getPost("description");
        $data = [
            'id'=>13,
            'type'=> $type,
            'nom'=> $name,
            'description' => $description,
        ];
        $model=new Regime();
        $model->create($data);
        return redirect()->to(base_url("backoffice/BoRegimeController/list"));
    }

    public function list(){
        $model=new Regime();
        $regimes=$model->getAll();
        return view('backoffice/regime/list',[
            'regimes'=>$regimes
        ]);
    }
}