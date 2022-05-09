<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=ROOT?>/favicon.ico" type="image/x-icon"> 

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="<?= ROOT ?>/js/jquery.min.js"></script>
  
    <link rel="stylesheet" href="<?=ROOT?>/css/main.css">
    <script src="<?=ROOT?>/js/jquery.min.js"></script>    

    <title><?=$title?></title>
</head>

<body> 
<header>
    <div class="header-main">
        <div class="main-logo">
            <img src="<?= ROOT ?>/img/logo.png">
        </div>

        <div class="div-search">            
            <form class="form-search-main" action="<?= ROOT ?>" method="GET">                
                <input name="pesquisa" class="input-search-main" type="text" placeholder="busque aqui o seu produto">
                <input id="sub_search" class="display-none" type="submit">
                <label class="label-search-main" for="sub_search"><span class="material-icons icon-search">search</span></label>
            </form>             
        </div>

        <div class="user-menu">
            <div class="user-login">
                <span class="material-icons">account_circle</span>
                <p>olá, faça seu <a class="link-header" href="#">login</a> <br> ou <a class="link-header" href="#">cadastre-se</a></p>
            </div>
            <div class="user-icons">  
                <div class="div-count">
                    <span class="material-icons icon-cart">shopping_cart</span>
                    <p>CARRINHO - </p>
                    <p class="count-icons">0</p>
                </div>     
            </div>
        </div>        
    </div>

    <div class="main-menu">
       <div class="itens-main-menu">
            <input type="checkbox" id="main_menu_checkbox" class="display-none">
            <label title="todas categorias" for="main_menu_checkbox" class="main-menu-icon">
                <div class="main-menu-line"></div>
                <div class="main-menu-line"></div>
                <div class="main-menu-line"></div>                
            </label>
           
            <ul class="main-menu-links">
                <li><a href="#">Celulares</a></li>
                <li><a href="#">casa</a></li>
                <li><a href="#">Jardim</a></li>
                <li><a href="#">eletrodomesticos</a></li>
                <li><a href="#">computadoes</a></li>
            </ul>
       </div>      
    </div>
</header>

<label for="main_menu_checkbox" class="menu-opaque-background"></label>
<div class="list-main-menu">   
    <div class="menu-customer">
        <p>Todas categorias</p>
        <label for="main_menu_checkbox" class="icon-menu-customer">
            <span class="material-icons">  close  </span>            
        </label>        
    </div>

    <div class="main-list"> 
        
    </div>
</div>

<div class="main"> 

@include($view)

</div> 

<script src="<?= ROOT ?>/js/main.js?<?= time() ?>"></script>
</body>
</html>