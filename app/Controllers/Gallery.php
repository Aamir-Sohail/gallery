<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GalleryModel;
use phpDocumentor\Reflection\Types\This;

class Gallery extends BaseController
{

    public function index()
    {
        return view('welcome_message');
    }


    public function insert()
    {
        $gallery = new GalleryModel();



        $file = $this->request->getFile('image');
       $file_type = $file->getClientMimeType();
       $valid_file_types =array("image/png" ,"image/jpeg" ,"image/jpg");
       $config['max_size'] =2048;
       $session =session();
       if(in_array($file_type,$valid_file_types)){

        if ($file->isValid() && !$file->hasMoved()) { 
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
            $session->setFlashdata("sucess", 'file has been uploaded');

        }

        $data = [
            'username' => $this->request->getPost('username'),
            'image' => $imageName,
        ];


        $gallery->save($data);
        var_dump($gallery->errors());
        return view('welcome_message');
    }


       }
        

        //    $gallery = new  GalleryModel();
        //    $file =$this->request->getFile('file');
        //    if($file->isValid() && ! $file->hasMoved()){
        //        $data =$file->getRandomName();
        //        $file->move('uploads/', $data);
        //    }

        //     $data =[
        //         'name'=>$this->request->getPost('name'),
        //         'file'=>$this->request->getPost('file'),
        //     ];
        // //    $db= \Config\Database::connect();
        // //    $builder =$db->table('upload');
        // //    $builder->insert($data);
            
        // $gallery = new GalleryModel();
        // $gallery ->insert($data); 
        // }
        public function Fetch()
        {
            $gallery = new GalleryModel();
           
            $images = $gallery->findAll();
            return view('welcome_message',$images);
            // var_dump($data);
            // exit;
        }


        public function delete($id=null){
            $gallery = new GalleryModel();

            $gallery->delete($id);
             return view('welcome_message');
        }
    }