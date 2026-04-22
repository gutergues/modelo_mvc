<?php

namespace App\Controllers\Erros;

use App\Core\Controller;

class HttpErrorController extends Controller
{
    public function notFound()
    {
        // retorna o status 404
        http_response_code(404);
        
        $this->view('erros/404');
    }
    
    public function internalServerError()
    {
        http_response_code(500);
        
        $this->view('erros/500');
    }
    
    public function Unauthorized()
    {
        http_response_code(403);
        
        $this->view('erros/403');
    }
}