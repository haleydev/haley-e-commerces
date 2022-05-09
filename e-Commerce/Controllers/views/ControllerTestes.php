<?php
namespace Controller;

class ControllerTestes
{      
    public $view = "testes";
    public $title = "Testes";    

    public function web(){ 
        $this->require = "./Public/view/".$this->view.".php";       
        require  "./Public/templates/main.php"; 
    }    
}

$view = new ControllerTestes;
$view->web();
