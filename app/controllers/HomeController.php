<?php
require_once(__DIR__ . '/../core/Controller.php');
require_once(__DIR__ . '/../models/Usuario.php');

class HomeController extends Controller 
{
    public function index()
    {
        $usuario = new Usuario();
        $data = $usuario->getUserData();
        
        var_dump($data);
        
        //exemplo de dados do model
        //$nome = 'Gutergues';
        //$idade = 65;
        
        //$this->view('home/index', ['nome' => $nome, 'idade' => $idade]);
        $this->view('home/index', $data);
        return;
    }
    
    public function contact()
    {
        $this->view('home/contact');
    }
}