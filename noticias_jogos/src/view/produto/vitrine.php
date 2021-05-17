<?php
    include_once("conexao.php");
    $id_produto = $_GET['id'];
    $result_cursos = "SELECT * FROM tabela_produtos WHERE id='$id_produto'";
    $resultado_cursos = mysqli_query($conn, $result_cursos);
    $rows_id = mysqli_fetch_assoc($resultado_cursos);
    ?>

<!--Conexão com o banco-->
<?session_start();
    include_once "../login_admin/conexao.php";
    if(isset($_SESSION['email']) && isset ($_SESSION['id']) && isset ($_SESSION['role'])) { 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informaçõs do Produto</title>
    <!-- CSS-->
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>   -->
	<link href="/noticias_jogos/src/css/index.css" rel="stylesheet"/>
	
    <!--back_and script -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
     <!--JQuery, Pooper.js e Bootstrap -->
    <script src="./src/Scripts/jquery-3.6.0.js"></script>
    <script src="./src/Scripts/popper.min.js"></script>
	<script src="./src/Scripts/bootstrap.min.js"></script>    
	<script src="./src/Scripts/index.js"></script>
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>

    <!--API GOOGLE-->
    <script src="https://accounts.google.com/gsi/client" async defer></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!--Fonte-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" type='text/css'>
</head>
<body style="background: linear-gradient(to right, #273db9, #00d4ff);">
    <!--IMPORTAR através do php o menu pronto-->
    <?php include_once "../geral/header_produto.php";?>

    <!--Seção para o admin-->
    <? phpif ($row['role'] === 'user') {?>

    <br><br>
    <div class="container animacao" >
        <div class="col-md-12">
            <section >
                <div class="row">
                    <!--Imagem-->
                    <div class="col-sm-6 mx-auto">
                        <div class="pro-img-details">
                            <?php echo '<img class="mx-auto d-block img-fluid "  src="/noticias_jogos/src/view/edição_dados_admin/upload/'.$rows_id['imagem_produto'].'" widht ="300px;" height="400px" alt="Imagem">';?>                         
                        </div>
                    </div>

                    <div class="col-sm-5 mx-auto  col-lg-5">
                        <!--Nome Produto-->
                        <h3 class="font-weight-bold text-uppercase text-left" >
                            <a class= "text-dark" style="text-decoration: none; " href="../produto/carrinho.php?id=<?php echo $rows_id['id']; ?>"><?php echo $rows_id['nome_produto']; ?></a>
                        </h3><br><br><br>

                        <!--Preço Produto-->
                        <div class="text-left text-uppercase"><h1  style=" font-size: 26px;">Preço :</h1> 
                            <span class="amount-old"><br>
                            <h1 class="text-left"style="font-size: 22px;"><?php echo'R$' .number_format($rows_id['preco_produto'],2,',','.').  '<br/>';?></h1> <br>
                            </span>
                        </div>
                        
                        <!--Quantidade Produto-->
                        <div class="form-group text-uppercase text-left">
                            <br><label>Quantidade: </label>
                            <input type="quantiy" placeholder="1" class="form-control quantity">
                        </div>
                        
                        <!--Botão-->
                        <br>
                        <p><a href="../produto/carrinho.php?id=<?php echo $rows_id['id']; ?>" class="btn btn-round btn-dark text-white btn-lg">
                        <i class="fa fa-shopping-cart"></i>  Adicionar ao carrinho</a></p>
                    </div>
                </div>
            </section>
        </div>
    </div>
     <br><br><br>

       <!--IMPORTAR através do php o footer = rodapé pronto-->
       <?php include_once "../geral/footer.php";?>

</body>
</html>