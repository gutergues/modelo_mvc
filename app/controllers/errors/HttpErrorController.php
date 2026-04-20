<?php
class HttpErrorController extends Controller
{
    public function NotFound()
    {
        // retorna o status 404
        http_response_code(404);
        
        $this->view('erros/404');
    }
    
    public function InternalServerError()
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