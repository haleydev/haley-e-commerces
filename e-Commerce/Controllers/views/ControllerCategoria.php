<?php
namespace Controller;

class ControllerCategoria
{      
    public $view = "categoria";
    public $title = "Categoria";    

    public $css = "categorias";
    public $class= "categoria";

    public function web(){ 
        if($this->css != null){
            $this->css = "<link rel='stylesheet' href='".URL."/css/".$this->css.".css?".time()."'>
            ";
        }    

        $this->require = "./Public/view/".$this->view.".php";       
        require  "./Public/templates/main.php"; 
    }    
}

$view = new ControllerCategoria;
$view->web();
