<?php

namespace App\Controllers;

use App\BaseController;

class PruebaController extends BaseController
{
    public function index($nombre,$para2="")
    {
        $data=[
            "title" => "TItulo ddd",
            "numeros" => [1,12,2,12,1,32,32,3,2,3]
        ];


        
        return view("Administration/prueba",$data);
    }
    public function contacto(){
        $data=[
            "title" => "a",
            "numeros" => [1,12,2,12,1,32,32,3,2,3]
        ];
        return view("Administration/contacto", $data);

    }
}
