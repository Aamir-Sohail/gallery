<?php

namespace App\Controllers;

use Config\Database;

class Home extends BaseController
{
    
    public function index()
    {
        $db = Database::connect();
        return view('welcome_message');
        
    }
}
