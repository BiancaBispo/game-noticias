<?php include_once("../noticias_jogos/src/banco/conexao.php");
$result_cursos = "SELECT * FROM cursos";
$resultado_cursos = mysqli_query($conn, $result_cursos);
?>

<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Game Notícias</title>
	<!-- CSS-->
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>   -->
	<link href="./src/css/index.css" rel="stylesheet"/>
	
    <!--back_and script -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <!--JQuery, Pooper.js e Bootstrap -->
    <script src="./src/Scripts/jquery-3.6.0.js"></script>
    <script src="./src/Scripts/popper.min.js"></script>
	<script src="./src/Scripts/bootstrap.min.js"></script>    
	<script src="./src/Scripts/index.js"></script>
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
    <!--Fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" type='text/css'>
</head>
<body>
    <!--MENU = Nav Bar-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-black">
        <div class="container">
            <a href="#" class="navbar-brand">Game Notícias</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="#inicio" class="nav-link">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="#noticia" class="nav-link">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a href="#videos" class="nav-link">Vídeos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contato" class="nav-link">Contato</a>
                    </li>
                    <!--Menu Icone produto-->
                    <li class="nav-item">
                        <a href="#produtos" class="nav-link">
                            <i class="fas fa-shopping-cart fa-2x"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--FIM MENU = Nav-->


<!--CERTO CAROSEUL-->
    <section id="curiosidades" class="service py-5 text-center">
        <div class="container">
         <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                <!--Controls-->
                <div class="controls">
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next" ><i class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li data-target="#multi-item-example" data-slide-to="1"></li>
                </ol>
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner text-center" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-10 mx-auto col-sm-10 text-center" style="float:left">
                                <br><h5 class="font-weight-bold text-uppercase">Sabia que existem campeonatos de video games?</h5> <br>
                                <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                <small><span class="service-icon"><i class="fas fa-headset fa-2x"></i></span></small>
                                
                            </div>
                        </div>
                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-6" style="float:left">
                                <div class="card">
                                    <h5 class="font-weight-bold text-uppercase">Sabia que existem campeonatos de video games?</h5> <br>
                                    <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                    <small><span class="service-icon"><i class="fas fa-headset fa-2x"></i></span></small>
                                </div>
                            </div>
                            <div class="col-md-6" style="float:left">
                                <h5 class="font-weight-bold text-uppercase">Sabia que existem campeonatos de video games?</h5> <br>
                                <p class="lead"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                <small><span class="service-icon"><i class="fas fa-headset fa-2x"></i></span></small>
                            </div>
                        </div>
                    </div>
                    <!--/.Second slide-->
                </div>
                <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
        </div>
    </section>
<!--FIM CERTO CAROSEUL-->




  <section id="review">
  <div class="shape">
    <div class="container text-center my-3">
      <h2 class="font-weight-light">Bootstrap 4 - Multi Item Carousel</h2>
      <div class="row mx-auto my-auto">
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
              <div class="carousel-inner w-100" role="listbox">
                  <div class="carousel-item active">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="http://placehold.it/380?text=1">
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="http://placehold.it/380?text=2">
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="http://placehold.it/380?text=3">
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="http://placehold.it/380?text=4">
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="http://placehold.it/380?text=5">
                          </div>
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="col-md-4">
                          <div class="card card-body">
                              <img class="img-fluid" src="http://placehold.it/380?text=6">
                          </div>
                      </div>
                  </div>
              </div>
              <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
      <h5 class="mt-2">Advances one slide at a time</h5>
    </div>
</div>
</section>





    <!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

  <!--Controls-->
  <div class="controls-top">
    <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
    <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
        class="fas fa-chevron-right"></i></a>
  </div>
  <!--/.Controls-->

  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
    <li data-target="#multi-item-example" data-slide-to="1"></li>
    
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active">

      <div class="col-sm-8 col-sm-offset-2" style="float:left">
        <div class="card">
          <div class="card-body">
            <blockquote>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                        <small>Someone famous</small>
                    </div>
                </div>
            </blockquote>
          </div>
        </div>
      </div>
    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">
    <div class="col-sm-8 col-sm-offset-2" style="float:left">
        <div class="card">
          <div class="card-body">
            <blockquote>
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                        <small>Someone famous</small>
                    </div>
                </div>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      
      <div class="col-md-3" style="float:left">
        <div class="card mb-2">
          <img class="card-img-top"
            src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
              card's content.</p>
            <a class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>

    </div>
    <!--/.Second slide-->

   

  </div>
  <!--/.Slides-->

</div>
<!--/.Carousel Wrapper-->


<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12" data-wow-delay="0.2s">
          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
              <!-- Bottom Carousel Indicators -->
              <ol class="carousel-indicators">
                  <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                  </li>
                  <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg" alt="">
                  </li>
                  <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" alt="">
                  </li>
              </ol>

              <!-- Carousel Slides / Quotes -->
              <div class="carousel-inner text-center">

                  <!-- Quote 1 -->
                  <div class="item active">
                      <blockquote>
                          <div class="row">
                              <div class="col-sm-8 col-sm-offset-2">

                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                                  <small>Someone famous</small>
                              </div>
                          </div>
                      </blockquote>
                  </div>
                  <!-- Quote 2 -->
                  <div class="item">
                      <blockquote>
                          <div class="row">
                              <div class="col-sm-8 col-sm-offset-2">

                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                  <small>Someone famous</small>
                              </div>
                          </div>
                      </blockquote>
                  </div>
                  <!-- Quote 3 -->
                  <div class="item">
                      <blockquote>
                          <div class="row">
                              <div class="col-sm-8 col-sm-offset-2">

                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                                  <small>Someone famous</small>
                              </div>
                          </div>
                      </blockquote>
                  </div>
              </div>

              <!-- Carousel Buttons Next/Prev -->
              <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
              <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
          </div>
      </div>
  </div>
</div>
<hr class="divider"/>

<strong>Powered by <a href="http://bootstheme.club" target="_blank">BootsTheme.Club</a></strong>

</section>


<!--Barra de pesquisa para o banco-->
    <form method="POST" action="../noticias_jogos/src/banco/pesquisar.php">
		Pesquisar: <input type="text" name="pesquisar" placeholder="PESQUISAR">
		<input type="submit" values="ENVIAR">    
	</form>

    <!--parte da vitrine com suas informações-->
    <div class="container theme-showcase" role="main">
        <div class="page-header">
            <h1>Cursos</h1>
        </div>
        <div class="row">
            <?php while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){ ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="../noticias_jogos/src/media/no-image.jpg" alt="..." >
                        <div class="caption text-center">
                            <a href="../noticias_jogos/src/banco/detalhes.php?id=<?php echo $rows_cursos['id']; ?>"><h3><?php echo $rows_cursos['nome']; ?></h3></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


    <!--INICIO Footer = roda pé -->
    <footer class="page-footer bg-dark">
        <div class="bg-success">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                    <div class="col-md-12 text-center">
                        <a href="#"><i class="fab fa-facebook-f text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-twitter text-white mr-4"></i></a>
                        <a href="#"><i class="fab fa-instagram text-white mr-4"></i></a>
                    </div>
                </div>
            </div>   
        </div>

        <div class="container text-center text-md-left mt-5">
            <div class="row">

                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Sobre nós</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
                    <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam voluptatum numquam recusandae tempora eos sunt quidem beatae. Expedita quis rem cumque vero earum odio, nemo, facilis consequatur reiciendis eaque at?</p>
                </div>
                
                <div class="col-md-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Menu</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
                    <ul class="list-unstyled"> 
                        <li class="my-2"><a href="#inicio">Inicio</a></li>
                        <li class="my-2"><a href="#noticias">Notícias</a></li>
                        <li class="my-2"><a href="#videos">Vídeo</a></li>
                        <li class="my-2"><a href="#contato">Contato</a></li>
                        <li class="my-2"><a href="#produtos">Produtos</a></li>
                    </ul>
                </div>
            
                <div class="col-md-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Contato</h6>
                    <hr class="bg-success mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height: 2px">
                    <ul class="list-unstyled"> 
                        <li class="my-2"><i class="fas fa-envelope mr-3"></i> contato@gmail.com</li>
                        <li class="my-2"><i class="fas fa-phone mr-3"></i> (00) 0000-0000</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-3">
            <p> All Right reserved by &copy; Projeto </p>
        </div>
    </footer>
    <!--FIM Footer = roda pé-->

</body>
</html>