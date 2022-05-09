<?php
namespace Controllers;
use App\Controller;

class HomeController extends Controller
{  
    public $title = "Commerce Mcquery";
    public $view = "home";  
   
    public function render()
    {   
        $this->layout('main'); 
    }
}