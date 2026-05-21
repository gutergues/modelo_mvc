<?php

require_once(__DIR__ . '/../core/Controller.php');

class HomeController extends Controller 
{
    public function index()
    {
        $this->view('home/index');
    }

    public function sobre()
    {
        echo "Página Sobre!";
    }

    public function contato()
    {
        echo "Página Contato!";
    }
}