<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\GalleryModel;
use phpDocumentor\Reflection\Types\This;

class Gallery extends BaseController
{

    public function index(){
        return view('welcome_message');
    }
       
    
        public function insert()
        {
          
           $gallery = new  GalleryModel();
           $file =$this->request->getFile('file');
           if($file->isValid() && ! $file->hasMoved()){
               $data =$file->getRandomName();
               $file->move('uploads/', $data);
           }

            $data =[
                'name'=>$this->request->getPost('name'),
                'file'=>$this->request->getPost('file'),
            ];
        //    $db= \Config\Database::connect();
        //    $builder =$db->table('upload');
        //    $builder->insert($data);
            
        $gallery = new GalleryModel();
        $gallery ->insert($data); 
        }
        public function Fetch()
        {
            $gallery = new GalleryModel();
           
            $data['gallery'] = $gallery->findAll();
            return view('welcome_message',$data);
        }


        public function delete($id=null){
            $gallery = new GalleryModel();

            $gallery->delete($id);
            return view('home');
        }
    }
    