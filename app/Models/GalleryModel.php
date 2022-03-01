<?php

namespace App\Models;

use CodeIgniter\Model;

class GalleryModel extends Model
{
    protected $primaryKey = "id";
    protected $table = "upload";
    protected $DBGroup = "default";
    protected $allowedFields = ['name', 'file'];
    protected $useTimestamps = true;
    protected $validationRules = [
        'name'     => 'required|alpha_numeric|min_length[3]',
        'file'        => 'required'
       
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