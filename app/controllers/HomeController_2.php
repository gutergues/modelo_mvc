<?php

class HomeController
{
    public function index()
    {
        //echo "Bem-vindo ao Home!";

        require_once __DIR__ . '/../views/home/index.php';
        return;
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