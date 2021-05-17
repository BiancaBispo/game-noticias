<?php 
   //session_start();
  
  //Importanto a coneção do banco
   include_once 'conexao_dbvendas.php';
   
   // Permite que os dados no input fiquem null, vazio, antes e apos o uso
   $id=0;
   $update = false;
   $nome_produto = '';
   $preco_produto = '';
   $estoque_produto = '';
   $imagem_produto = '';

   //Se for solocitado a opção  'save', (visto no botão para criar novos dados),
   if(isset($_POST['save'])) {
      
      $nome_produto = $_POST['nome_produto'];
      $preco_produto = $_POST['preco_produto'];
      $estoque_produto = $_POST['estoque_produto'];
      $imagem_produto = $_FILES['imagem_produto']['name'];

      $validate_img_extensao = $_FILES['imagem_produto']['type'] == "image/jpg" || $_FILES['imagem_produto']['type'] == "image/png" || 
      $_FILES['imagem_produto']['type'] == "image/jpeg";
      
      if($validate_img_extensao)
      {
         if(file_exists("upload/" . $_FILES['imagem_produto']['name']))
         {
            $store = $_FILES['imagem_produto']['name'];
            $_SESSION['status']= "Image já existe. '.$store.'";
            header("Location: produto_admin.php");
   
         }else{
            if(!$result-> num_rows > 0) {
            // Colocara, atraves do Mysql, os valores solicitados no input, na tabela "users"
            $sql = "INSERT INTO tabela_produtos (nome_produto, preco_produto, estoque_produto, imagem_produto) VALUES ('$nome_produto','$preco_produto','$estoque_produto','$imagem_produto');" ;
            $query = mysqli_query($conn, $sql);
   
               if($query){
               move_uploaded_file($_FILES['imagem_produto']['tmp_name'], "upload/".$_FILES["imagem_produto"]["name"]);
               //mensagens de alerta quando a função for concluida
               $_SESSION['success'] ="Adicionado com sucesso";
               header("Location: produto_admin.php");
   
                  if(!$result){
                     //tirar o registro quando o formulario é enviado
                     $nome_video = "";
                     $url_video = "";
                     $codigo_video = "";
                  }
               }else{
                  $_SESSION['success'] = "Não foi possível adicionar";
                  header("Location: produto_admin.php");
               }
            }
         }
      }else{
         header("Location: produto_admin.php?error=Formato do arquivo incorreto!");
      }
   }

   //Se for solicitado a opção delete (nos botões do index, que tem em cada dado da tabela) 
   if(isset($_GET['delete'])){
      $id = $_GET['delete'];

      //Deleterá os arquivos da tabela users através do id
      $sql = "DELETE FROM tabela_produtos WHERE id=$id";
      mysqli_query($conn, $sql);


      //mensagens de alerta quando a função for concluida
      $_SESSION['message'] = "Produto deletado com sucesso!";
      $_SESSION['msg_type'] = "danger";
      header("Location: produto_admin.php");

   }

   //Se for solicitado a opção update, os dados que ficaram nos input e puxado por aqui
   if(isset($_GET['edit'])){
      function validate($data){
         $data = trim($data);
         $data = stripslashes($data);
         $data = htmlspecialchars($data);
         return $data;
      }

      $id = validate($_GET['edit']);
      $id = $_GET['edit'];
      $update = true;
      
      //Seleciona todos os dados da tabela users através do id
      $sql = "SELECT * FROM tabela_produtos WHERE id=$id";
      $result = mysqli_query($conn, $sql);

      //Quando o resultado for 1, o row permite colocar os dados nos inputs 
      if (mysqli_num_rows($result) == 1) {
         $row = mysqli_fetch_assoc($result);
         $nome_produto = $row['nome_produto'];
         $preco_produto = $row['preco_produto'];
         $estoque_produto = $row['estoque_produto'];
         $imagem_produto = $row['imagem_produto'];
      }
   }

   //Se for solicitado a opção update (nos botões do index, que tem em cada dado da tabela) 
   if(isset($_POST['update'])){
      $id = $_POST['id'];
      $nome_produto = $_POST['nome_produto'];
      $preco_produto = $_POST['preco_produto'];
      $estoque_produto = $_POST['estoque_produto'];
      $imagem_produto = $_FILES['imagem_produto']['name'];

      $sql_query= "SELECT * FROM tabela_produtos WHERE id=$id";
      $query_image= mysqli_query($conn, $sql_query);
      foreach($query_image as $fa_row)
      {
         if($imagem_produto == NULL){
            //Atualizar imagem se já existir 
            $imagem_data = $fa_row['imagem_produto'];
         }else{
            //Atualizar com a nova imagem e deletar a imagem antiga que esta no diretório
            if($img_path = "upload/".$fa_row['imagem_produto'])
            {
               unlink($img_path);
               $imagem_data = $imagem_produto;

            }
         }
      }


      //Seleciona todos os dados da tabela users para a edição (update) através do id
      $sql = "UPDATE tabela_produtos SET nome_produto='$nome_produto', preco_produto='$preco_produto', estoque_produto='$estoque_produto', imagem_produto='$imagem_data' WHERE id=$id";
      $query= mysqli_query($conn, $sql);
      
      if($query)
      {
         if($imagem_produto == NULL)
         {
            //Atualizar imagem se já existir 
            $_SESSION['success'] = "Imagem já existe";
            header("Location: produto_admin.php");

         }else{
            //Atualizar com a nova imagem e deletar a imagem antiga que esta no diretório
            move_uploaded_file($_FILES['imagem_produto']['tmp_name'], "upload/".$_FILES['imagem_produto']['name']);
            $_SESSION['success'] = "Adicionado!!";
            header("Location: produto_admin.php");
         }
      
      }else{
         $_SESSION['success'] = "Erro ao adicionar";
         header("Location: produto_admin.php");
      }

      //mensagens de alerta quando a função for concluida
      $_SESSION['message'] = "Produto alterado com sucesso!";
      $_SESSION['msg_type'] = "warning";
   }
   
?>