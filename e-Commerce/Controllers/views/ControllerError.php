<?php
namespace Controller;

class ControllerError 
{    
    public $view = "error";
    public $title = "Page not found";    

    public function web(){
        http_response_code(404);
        $this->require = "./Public/view/".$this->view.".php";       
        require  "./Public/templates/main.php"; 
    }
}

$view = new ControllerError;
$view->web();
    