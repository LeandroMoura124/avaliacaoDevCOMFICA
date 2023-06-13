<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href=" <?= base_url(uri:"css/bootstrap.css") ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuários</title>

    <!-- Estilizando -->
    <style>
    
      .container {
        margin-top: 2%;
        padding-top: 0%;
        width: 90%;
        height: 500px;
        background-color: #1a19196b;
      }
      #btn{
        background-color:#87CEFA;
        margin: 40% 0% 0% 90%;
      }
      #btnfav{
        background-color:#000080;
        margin: 1% 1% -1% 85%;
      }
    
    </style> 
   
</head>
<body>

<?php  include 'nav.php' ?>
  
<?php echo form_open(action:"");
              echo form_button(array(
                "class" => "btn btn-primary",
                "type" => "submit",
                "id" => "btnfav",
                "content" => "Favoritos"

              ));

            echo form_close();
          ?>

  <div class="container">

  <!-- adicionar -->
  <?php echo form_open(action:"usuarios/cadlivro");
              echo form_button(array(
                "class" => "btn btn-primary",
                "type" => "submit",
                "id" => "btn",
                "content" => "Adicionar"

              ));

            echo form_close();
   ?>

  </div>


  <!-- <?php include 'rodape.html' ?> -->

</body>
</html>