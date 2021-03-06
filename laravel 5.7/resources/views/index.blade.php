<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- css links -->
    <link href="{{ url('') }}/css/main.css" rel="stylesheet">
    <!-- end css linkd -->

    <title>Document</title>
</head>

<body>
    <header>
        <div class="header-s1">
            <div class="user-acont-options">
                <a href="#">Minha conta</a>
                <span class="line-separator"></span>
                <a href="#">Meus pedidos</a>
                <span class="line-separator"></span>
                <a href="#">Finalizar pedido</a>
            </div>

            <div class="header-s1-separator">
                <div class="header-contact">
                    <div class="h-contact-1">
                        <a href="#">
                            <img src=" {{ url('') }}/svg/icon-phone-solid.svg">
                            <p>(31) 3317-6070</p>
                        </a>
                    </div>

                    <div class="h-contact-2">
                        <a href="#">
                            <img src=" {{ url('') }}/svg/icon-header-whatsapp.svg">
                            <p>(31) 99563-6040</p>
                        </a>
                    </div>
                </div>

                <span class="line-separator"></span>

                <div class="header-social-icons">
                    <a href="">
                        <img class="facebook-icon-header" src=" {{ url('') }}/svg/icon-facebook-header.svg">
                    </a>

                    <a href="">
                        <img src=" {{ url('') }}/svg/icon-twitter-header.svg">
                    </a>

                    <a href="">
                        <img class="instagram-icon-header" src=" {{ url('') }}/svg/icon-instagram-header.svg">
                    </a>
                </div>
            </div>
        </div>

        <div class="header-s2">
            <div class="div-main-logo">
                <h1 class="display-none">drogamaxi</h1>
                <a href="{{ url('') }}"><img class="main-logo" src=" {{ url('') }}/svg/logo.svg"></a>
            </div>

            <div class="search-main">
                <form class="form-search-main" action="#" method="GET">
                    <input class="search-main-text" type="text" placeholder="Digite o que procura">
                    <button class="search-main-button" type="submit">BUSCAR</button>
                </form>
                <span class="autocomplete" id="autocomplete"></span>
            </div>

            <div class="navigation-right">
                <div class="box-help">
                    <a href="#" class="links-navigation-right">
                        <img src=" {{ url('') }}/svg/icon-header-phone-volume.svg">
                        <div class="box-text">
                            <p>Central de</p>
                            <p class="box-p2">Atendimento</p>
                        </div>
                    </a>
                </div>

                <div class="box-login">
                    <a href="#" class="links-navigation-right">
                        <img src=" {{ url('') }}/svg/icon-header-user.svg">
                        <div class="box-text">
                            <p>Login</p>
                            <p class="box-p2">Meus pedidos</p>
                        </div>
                    </a>
                </div>

                <div class="box-cart">
                    <a href="#" class="links-navigation-right">
                        <div class="icon-box-cart">
                            <p class="box-cart-count">0</p>
                            <img src=" {{ url('') }}/svg/icon-header-cart.svg">
                        </div>

                        <div class="box-text">
                            <p>Minha cesta</p>
                            <p class="box-cart-money">R$ 0,00</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="header-s3">
            <div class="main-menu">
                <a class="button-main" list="list-itens-1" href="#">MEDICAMENTOS</a>
                <a class="button-main" list="list-itens-2" href="#">HIGIENE E BELEZA</a>
                <a class="button-main" list="list-itens-3" href="#">INFANTIL</a>
                <a class="button-main" list="list-itens-4" href="#">GERI??TRICO</a>
                <a class="button-main" list="list-itens-5" href="#">SUPLEMENTOS</a>
                <a class="button-main" list="list-itens-6" href="#">ACESS??RIOS</a>
                <a class="button-main" list="list-itens-7" href="#">CONVENI??NCIA</a>

                <div class="menu-main-btn-offers">
                    <a href="#">OFERTAS</a>
                </div>

                <div class="menu-main-all-itens">
                    <div class="itens-menu" id="list-itens-1">
                        <h1>helo word</h1>
                    </div>

                    <div class="itens-menu" id="list-itens-2">
                        <h1>item 2</h1>
                    </div>

                    <div class="itens-menu" id="list-itens-3">
                        <h1>item 2</h1>
                    </div>

                    <div class="itens-menu" id="list-itens-4">
                        <h1>item 2</h1>
                    </div>                    
                </div>                
            </div>
        </div>
    </header>
    
    <script>
        $(".button-main").on({              
            "mouseover" : function() {
                $('#' + $(this).attr('list')).addClass("main-menu-active");
            },  
            
            "mouseout" : function() {               
                $('#' + $(this).attr('list')).removeClass("main-menu-active");
            } 
        });

        $(".itens-menu").on({ 
            "mouseover" : function() {
                if(!$(this).is(".main-menu-active")){
                    $(this).addClass("main-menu-active");
                }; 
                $('[list="' + $(this).attr('id') + '"]').addClass("main-menu-button-active");                
            },
            "mouseout" : function() {  
                $(this).removeClass("main-menu-active");      
                $('[list="' + $(this).attr('id') + '"]').removeClass("main-menu-button-active");                 
            }     
        });     
    </script>

</body>

</html>