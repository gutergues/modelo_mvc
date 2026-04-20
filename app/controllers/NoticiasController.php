<?php
require_once(__DIR__ . '/../core/Controller.php');

class NoticiasController extends Controller 
{
    public function index() 
    {
        $this->view('noticias/index');
        
        //return;
    }
    
    public function noticia($idNoticia = null, $segundoparams = null)  //$params = []
    {
        //https://sasteamofficial.com/assets/services/modelo_mvc/noticias/noticia/1/teste
        //var_dump($idNoticia, $segundoparams);
        $this->view('noticias/noticia', ['idNoticia' => $idNoticia]);
    }
}