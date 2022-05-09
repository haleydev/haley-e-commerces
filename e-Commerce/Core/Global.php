<?php
date_default_timezone_set('America/Sao_Paulo');

if(!isset($_SESSION)){
    session_start();    
}

ob_start();

define("NAME", "Tivo");  

// url config
if($_SERVER["HTTP_HOST"] == "localhost"){
    define("URL", "http://localhost");  
}else{
    //you site url
    define("URL", "https://infinityfilmes.net"); 
}
// end url config


// functions front-end
function active($link){
    $linkatual = filter_var(urldecode($_SERVER['REQUEST_URI']), FILTER_SANITIZE_URL);              
        if($link == $linkatual){
            echo 'active';
    }
}
// end functions front-end