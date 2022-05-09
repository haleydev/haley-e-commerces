<?php
namespace Controller;

class ControllerPost
{      
    public $view = "post";
    public $title = "Posts";    

    public function web(){ 
        $this->require = "./Public/view/".$this->view.".php";       
        require  "./Public/templates/main.php"; 
    }    
}

$view = new ControllerPost;
$view->web();
