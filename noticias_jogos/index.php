<!--Importantando as dependecias para ativar o banco de dados da section Produtos-->
<?php include_once("../noticias_jogos/src/banco/conexao.php");
$result_cursos = "SELECT * FROM cursos";
$resultado_cursos = mysqli_query($conn, $result_cursos);
?>
<!--FIMM-->

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Game Notícias</title>
	<!-- CSS-->
	<link href="./src/css/index.css" rel="stylesheet"/>
    <!--Fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" type='text/css'>
     <!--JQuery, Pooper.js e Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

    <script src="./src/Scripts/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
	<script src="./src/Scripts/index.js"></script>
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script> 
</head>
<body>

    <!--IMPORTAR através do php o menu pronto-->
    <?php include_once "./src/view/header.php";?>

    <!--Início Slider-->
    <section id="inicio" >
        <div id="Carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                <li data-target="#Carousel" data-slide-to="1"></li>
                <li data-target="#Carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item carousel-image-1 active">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block text-right mb-5">
                            <h1 class="display-3 title-color "> Mundo Game</h1>
                            <p class="lead"> Navegue pelas fases desse mundo das notícias games!!</p>
                            <a href="#noticia" class="btn btn-color slide-btn btn-lg">Descubra</a>
                        </div>
                    </div>
                </div>
                <!--FIM imagem 1-->
                <div class="carousel-item carousel-image-2">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-5">
                            <div class="row">
                                <div class="col-10 mx-auto col-sm-12">
                                    <h1 class="display-3 title-color text-capitalize product-title text-center"> Notícias</h1>
                                    <p class="lead">Encontre as notícias do momento</p>
                                    <a href="noticias.php" class="btn btn-color slide-btn btn-lg">Ler mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--FIM imagem 2-->
                <div class="carousel-item carousel-image-3">
                    <div class="container">
                        <div class="carousel-caption d-none d-sm-block mb-5">
                            <h1 class="display-3 title-color"> Sobre nós</h1>
                            <p class="lead">Conheça nossa equipe!</p>
                            <a href="#contato" class="btn btn-color slide-btn btn-lg">
                                Ler mais
                            </a>
                        </div>
                    </div>
                </div>
                <!--FIM imagem 3-->
                <a href="#Carousel" data-slide="prev" class="carousel-control-prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a href="#Carousel" data-slide="next" class="carousel-control-next">
                    <span class="carousel-control-next-icon"></span>
                </a>
                <!--Controles-->
            </div>
        </div>
    </section>
    <!--FIM SLIDER-->

    <!--IMPORTAR através do php o carroseul icons-->
    <?php include_once './src/view/carousel.php';?>

    <!--INÍCIO notícias-->
    <section id="noticia" class="service py-5 header-site-news">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto col-sm-12">
                    <h1 class="text-capitalize product-title text-center">Notícias</h1>
                    <p class="lead text-center"> Encontre aqui notícias sobre o mundo dos Games!</p> 
                    <div id="noticias" class="noticias"><body onload="getNewsById('3275228396');getNewsById('3276690220');getNewsById('3277780320');getNewsById('3277839212')"></body></div>
                   <br><div class="text-center"><a href="noticias.php" class="btn btn-color slide-btn btn-lg">MAIS NOTÍCIAS</a> </div> 
                </div>
            </div>
        </div>
    </section>
    <!--FIM notícias-->

    <!--IMPORTAR através do php os VIDEOS-->
    <?php include_once './src/view/video.php';?>

    <!--INICIO Produtos 
    <section id="produtos" class="products py-5 text-center">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <h1 class="text-capitalize product-title">produtos</h1>
                </div>
                <div class="container theme-showcase" role="main">
                    <div class="row">
                    <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
                            <div class="col-sm-6 col-md-4 video-anima">
                                <div class="thumbnail">
                                    <img src="../noticias_jogos/src/media/no-image.jpg" style="width: 18rem ; margin: 1rem" alt="..." >
                                    <div class="caption text-center">
                                        <a href="../noticias_jogos/src/banco/detalhes.php?id=<?php echo $rows_cursos['id']; ?>"><h3><?php echo $rows_cursos['nome']; ?></h3></a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-10 mx-auto col-sm-6 text-center">
                    <br><a href="./src/view/produto.php" class="btn btn-color slide-btn btn-lg">PRODUTOS</a>  
                </div>
            </div>
        </div>
    </section>
     FIM Produtos--> 

    <!--INICIO icones info-->
    <section id="review" class="service py-5 text-center header-site ">
        <div class="container">
            <div class="row">
                <!--Inicio primeiro-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3 animacao">
                    <span class="service-icon"><i class="fas fa-headset fa-2x"></i></span>
                    <h5 class="font-weight-bold text-uppercase">Campeonatos de video games?</h5>
                    <p class="lead text-center">Hoje em dia, os games não são apenas passatempos ou entretenimento, mas também uma forma de ganhar dinheiro. </p>
                </div>
                <!--Inicio segundo-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3 animacao">
                    <span class="service-icon"><a href="https://store.steampowered.com/?l=portuguese" target="_blank"><i class="fab fa-steam fa-2x"></i></a></span>
                    <h5 class="font-weight-bold text-uppercase">Quer jogar?</h5>
                    <p class="lead text-center"> Conheça a Steam, um software que possibilite a compra dos seus jogos favoritos. </p>
                </div>
                 <!--Inicio terceiro-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3 animacao">
                    <span class="service-icon"><a href="https://www.twitch.tv/"target="_blank"><i class="fab fa-twitch fa-2x"></i></a></span>
                    <h5 class="font-weight-bold text-uppercase"> Twitch</h5>
                    <p class="lead text-center"> A Twitch é o lugar onde milhões de pessoas se reúnem diariamente para conversar, jogar, interagir e criar seu próprio entretenimento ao vivo.</p>
                </div>
            </div>
        </div>
    </section>
    <!--FIM icones info-->
    

    <!--IMPORTAR através do php o footer = rodapé pronto-->
    <?php include_once "./src/view/footer.php";?>


</body>
</html>



    <!--FIM notícias-->
    
            <!--<iframe src="" onload="getNewsById('3270664757')"></iframe>
            <iframe src="" onload="getNewsById('3270649511')"></iframe>
            <iframe onload="getNewsById('3270691504')"></iframe>
            

            <body onload="getNewsById('3275228396')">
            <body onload="getNewsById('3277775950')">
            <body onload="getNewsById('3277772832')">
            <body onload="getNewsById('3270664757')">
                <body onload="getNewsById('3270649511')">  
            <body onload="getNews()">  
                <div class="col-sm-6 col-md-4">
            <body onload="getNewsById('3270664757')">
        </div>-->
            <!-- por ID 
            <input type="button" value="carregar notícias" onclick="getNewsById('3269425598')"/>    
            <input type="button" value="carregar notícias" onclick="getNews()"/>   
        </section>-->
        <!--FIM notícias--> 

        <!--FIM notícias
        <section id="produtos" class="products py-5">      
        <div class="container">
                <div class="row">
                    <div class="col-4 mx-auto col-sm-9">
                        <body onload="getNewsById('3270664757')">
                    </div>
                </div>   
            </div>        
        </section> -->
