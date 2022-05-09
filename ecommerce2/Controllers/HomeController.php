<?php
namespace Controllers;
use Core\Controller;

class HomeController extends Controller
{
     public function render()
    { 
        $this->view = 'views/home';
        $this->title = 'Commerce Mcquery';          
        
        return template('layouts/main', $this); 
    }
}