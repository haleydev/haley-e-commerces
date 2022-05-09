<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#6d79cb">

    <!-- import scripts -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- end import scripts -->

    <!-- import fonts -->

    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Keania+One&display=swap" rel="stylesheet">
    
    <!-- end import fonts -->

    <!-- styles import -->

    <link rel="stylesheet" href="<?= URL ?>/css/main.css?<?=time()?>">
    <?=$this->css ?? null?>

    <!-- end styles import -->

    <title><?= $this->title ?></title>
</head>

<body>
    <!-- nav bar -->
    <!-- all categories -->
    <div id="menu-main" class="menu-main categories-ocult">
        <span class="color-mode">
            <input type="button" id="btn_theme" class="display-none">
            <label title="ligar/deligar modo noturno" for="btn_theme">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="btn-color-mode" viewBox="0 0 16 16">
                    <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8.5 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707zM3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z" />
                </svg>
            </label>
        </span>  

        <div id="div-btn-categories" class="div-btn-categories">
            <span class="lines-label lines-categories">
                <div class="line-menu"></div>
                <div class="line-menu"></div>
                <div class="line-menu"></div>
            </span>
        </div>

        <div class="all-categories">

            <details>
                <summary>Celulares <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-all-categories" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/><path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></summary>
                <div class="all-categories-itens">
                    <a class="<?= active("/testes") ?>" href="<?= URL ?>/testes">TESTES</a>
                    <a class="<?= active("/categoria") ?>" href="<?= URL ?>/categoria">Categoria</a>
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                </div>
            </details>

            <details>
                <summary>Eletronicos <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-all-categories" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/><path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></summary>
                <div class="all-categories-itens">
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                </div>
            </details>

            <details>
                <summary>informatica <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-all-categories" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/><path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></summary>
                <div class="all-categories-itens">
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                </div>
            </details>

            <details>
                <summary>casa <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-all-categories" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/><path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></summary>
                <div class="all-categories-itens">
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                </div>
            </details>

            <details>
                <summary>Beleza e perfumaria <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="drop-all-categories" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1.646 6.646a.5.5 0 0 1 .708 0L8 12.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/><path fill-rule="evenodd" d="M1.646 2.646a.5.5 0 0 1 .708 0L8 8.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/></svg></summary>
                <div class="all-categories-itens">
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                    <a class="<?= active("/celulares") ?>" href="google.com">Apple</a>
                </div>
            </details>

        </div>
    </div>
    <!-- end all categories -->

    <header id="header">
        <span class="line-top-media"></span>

        <div class="header-p1">
            <div class="logo-header">
                <a href="<?= URL ?>"><img src="<?=URL?>/images/logo.svg?Ds" alt="logo"></a>
            </div>            

            <div class="op-user"> 
                <div class="menu-login">
                    <p><a href="#">ENTRAR</a> / <a href="#">CADASTRO</a></p>
                </div>                    
                
                <!-- cart -->
                <div class="menu-carrinho">
                    <div class="card-info">
                        <p>Carrinho</p>
                        <p>0 produtos</p>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="cart-menu" viewBox="0 0 16 16">
                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                    </svg>
                </div>
                <!-- end cart -->
              
            </div>
        </div>           

        <div id="menu-header" class="menu-header">
            <div id="div-btn-categories" class="div-btn-categories">
                <span class="lines-label">
                    <div class="line-menu"></div>
                    <div class="line-menu"></div>
                    <div class="line-menu"></div>
                </span>
            </div>

            <div class="menu-header-links">
                <a class="<?= active("/") ?>" href="<?= URL ?>">Mercado</a>
                <a class="<?= active("/testes") ?>" href="<?= URL ?>/testes">Testes</a>
                <a class="<?= active("/categoria") ?>" href="<?=URL?>/categoria">categoria</a>
                <a class="<?= active("/informatica") ?>" href="google.com">Informatica</a>
                <a class="<?= active("/post/dfgsdfgdsf/sdgsdfgsdg/sdfgsdfgsdf") ?>" href="<?=URL?>/post/dfgsdfgdsf/sdgsdfgsdg/sdfgsdfgsdf">teste 2</a>
                <a class="<?= active("/beleza-e-perfumaria") ?>" href="google.com">Beleza</a>
            </div>  
            
            <div class="div-main-search">
                <form class="form-search" method="get" action="<?= URL ?>">
                    <input class="main-search" id="main-search" type="text" placeholder="Procurar" name="pesquisa">
                    <!-- icon search -->
                    <input class="display-none" id="go-search" type="submit">
                    <label for="go-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="btn-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </label>
                    <!-- and icon search -->
                </form>
            </div>
        </div>
    </header>    

    <!-- end nav bar -->

    <!-- main section -->
    <section class="main <?= $this->class ?? "" ?>">
        <?php include $this->require ?>

    </section>
    <!-- end main section -->

    <!-- footer -->
    <footer>
        <p>&copy; Warley Rodrigues 2021</p>
    </footer>
    <!-- end footer -->

    <script src="<?= URL ?>/js/main.js?5jf"></script>
    <script src="<?= URL ?>/js/theme.js?2.5"></script>

</body>

</html>