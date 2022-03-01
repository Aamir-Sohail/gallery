<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $primaryKey = "id";
    protected $table = "upload";
    protected $DBGroup = "default";
    protected $allowedFields = ['username', 'image'];
    protected $useTimestamps = true;
    protected $validationRules = [
        'username'     => 'required',
        'image'        => 'uploaded[image]',
       
    ];


    public function transBegin()
    {
        return $this->db->transBegin();
    }
    public function transRollback()
    {
        return $this->db->transRollback();
    }

    public function transCommit()
    {
        return $this->db->transCommit();
    }


}



?>