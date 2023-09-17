<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function test()
        {
            echo "hello world";
        } 
    
    public function index(): string
    {
        return view('welcome_message');
    }
}
