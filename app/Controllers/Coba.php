<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {
        session()->setFlashdata(['tes' => "halooo"]);
    }

    public function tes()
    {
        echo session()->getFlashdata('tes');
    }
}
