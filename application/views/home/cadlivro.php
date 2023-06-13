<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Adicionar livros</title>
	
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href=" <?= base_url(uri:"css/bootstrap.css") ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	  margin: 5% 0% 0% 90%;
	}
	#btnfav{
	  background-color:#000080 ;
	  margin: 1% 1% -1% 85%;
	}
	.row{
		width: 100%;
		background-color: #d3d3d3;

	}		
	.container-fluid{
		width: 70%;

	}
	.row{

	}
	.col-sm-4{
		margin-left: 30%;
	}
	.col-sm-4 .text{
		background-color: #000080;
		text-align: center;
		margin-left: -109%;
		padding: 4px;
		width: 748px;
		color: #fff;
	}
	.form-group label{
		text-align: center;
		width: 100%;
	}
	.form-group input{
		width: 600px;
		margin-left:-75%;
	}
	.btn-conf{
	display: inline-block;
	font-weight: 400;
	text-align: center;
	white-space: nowrap;
	vertical-align: middle;
	border: 1px solid transparent;
	padding: 0.375rem 0.75rem;
	font-size: 1rem;
	background-color: #87CEFA;
	line-height: 1.5;
	border-radius: 0.25rem;	
	}	
	.alingbutton{
		width: 600px;
		padding-top: 8px;
		margin: 15px;
		margin-left: 250px ;
	}
	.form-group label{
		font-weight: 700;
		font-size: 20px;
	}
  </style> 


<script>
	
	
	// aplicando máscara com jquery
// $(document).ready(function(){
	
// $('#preco').mask('000.000.000.000.000,00', {reverse: true});	
// $("#isbn").mask('000-00-000-0000-0'); 
	
// });
	
</script>
	

	
	
	
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
	<div class="container-fluid">
			<div class="row">
			
				<div class="col-sm-4">
					<div class="text">
						<h2>Adicionar Livro</h2>
					</div>
					<form method="post" action="" name="incluiProd" enctype="multipart/form-data">

						<div class="form-group">
					
							<label for="txtlivro">Titulo:</label>
							<input type="text" name="txtlivro" class="form-control" required id="txtlivro">
						</div>

						<div class="form-group">
					
							<label for="txtlivro">Descrição:</label>
							<input type="text" name="txtlivro" class="form-control" required id="txtlivro">
						</div>
						
					
						<div class="form-group">

							<label for="txtisbn">Url da imagem:</label>
							<input type="text" name="txtisbn" class="form-control" required id="txtisbn">
						</div>


			
			  		<div class="alingbutton">
					    <button type="submit" class="btn btn-danger">
							<span class="glyphicon glyphicon-pencil"> Cancelar </span>	
						</button>

									
											
						<button type="submit" class="btn-conf">
							<span class="glyphicon glyphicon-pencil"> Confirmar </span>	
						</button>
					
					</div>
						
					</form> 
					
				</div>
				
			</div>
			
		</div>
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
	
	
	
	
	
	
</body>
</html>