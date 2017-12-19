<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    
      
    /**
     * Contrutor padrão
     */
    function __construct(){
    
        
    }
    
    
    /**
     * Função inicial da classe
     */
    function index(){
       
        $titulo = "Meu Site";
        
        return view('Inicio.index', compact('titulo'));
        
    }
    
}
