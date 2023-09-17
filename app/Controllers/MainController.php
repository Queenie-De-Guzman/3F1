<?php

namespace App\Controllers;

use App\Models\MainModel;
use App\Controllers\BaseController;



class MainController extends BaseController
{
    private $st;

    public function __construct()
    {
        $this->st= new MainModel();
    }
    public function st($st)
    {
        echo $st;
    }

    public function index()
    {
       $main = new MainModel();
       $data ['st'] = $main->findAll();
        return view ('main',$data);
    }
    public function save($id = null){

        $id =$_POST['id'];
        $data = [
            'studentID' => $this->request->getVar('studentID'),
            'FullName' => $this->request->getVar('FullName'),
            'YearLevel' => $this->request->getVar('YearLevel'),
            'Program' => $this->request->getVar('Program'),
        ];
        if($id!= null)
        {
            $this->st->set($data)->where('id',$id)->update();
        }else{
        $this->st->save($data);
        }
        return redirect()->to('/main');
    }
    public  function delete($id){
        $main = new MainModel();
        $record = $main->find($id);
        if($record){
            $main->delete($id);
            return redirect()->to('/main');
        }else{
            return "Record not found";
        }
    }

    public function edit($id)
    {   $data=
    [
      'st' => $this->st->findAll(),
      'stud'=> $this->st->where('id',$id)->first(),
    ];
    return view('/main',$data);
   }
}



