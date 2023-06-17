<?php

namespace App\Controllers;

use App\Controllers\BaseController;



class File extends BaseController
{


    public function index()
    {
        
    }
    public function upload()
    {
        $image = $this->request->getFile('image');
        $file_name = $image->getName();
        return $file_name;
    }
    public function delete()
    {
        
    }

}
