<?php

require_once(__DIR__ . '/../core/Controller.php');

class HomeController extends Controller 
{
    public function index()
    {
        $nome = 'Gutergues Gomes';
        $idade = '65';

        $this->view('home/index', ['nome_user' => $nome, 'idade' => $idade]);
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