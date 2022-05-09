<?php
namespace Controller;

class ControllerHome
{    
    public $view = "index";   
    public $title = "e-Commerce";      

    public $css = "index";
    public $class= "index";
    
    public function web(){    
        if($this->css != null){
            $this->css = "<link rel='stylesheet' href='".URL."/css/".$this->css.".css?".time()."'>
            ";
        }    
        $this->require = "./Public/view/".$this->view.".php";       
        require  "./Public/templates/main.php"; 
    }
}

$view = new ControllerHome;
$view->web();
