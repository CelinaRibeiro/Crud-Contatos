<?php
//namespace controllers;

class homeController extends Controller{
    
    public function __construct(){
        // parent::__construct();
    }
    
    public function index(){
        $dados = array();
        
        $contatos = new Contatos();
        $dados['lista'] = $contatos->getAll();
        
        $this->loadTemplate('home', $dados);
    }
}

