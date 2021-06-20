<?php 
    session_start();
    if(!empty($_SESSION['id'])){

    }else{
        $_SESSION['msg'] = "Área Restrita";
        header("Location: ../login.php");
    }

    if($_SESSION['usuarioNiveisAcessoId'] == "1"){

    }elseif($_SESSION['usuarioNiveisAcessoId'] == "0"){

    }else{
        $_SESSION['msg'] = "Área Restrita";
        header("Location: ../cadastro/restrito.php"); 
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <title><?php echo "CLIENTE :: ".$_SESSION['nome']." "?></title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/style.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/controller.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>

	<script type="text/javascript">
            function logout() {
            window.open("../../cadastro/sair.php", '_parent');
            }

        </script>
  </head>

  <body>
  <div id="top-head">
            <div id="rownav">
                <div class="row">

                    <div class="col">
                        <div class="img-fluid">
                            <img id="image" src="../../img/login.png" class="img-fluid img-pointer img-mobile"/>
                        </div>
                    </div>
                    
                    <div class="col ola-php">
                        <span>
                            <?php
                                echo "Olá <span style='color:#5c0eb4; font-weight: 600;'>".$_SESSION['nome']."</span>, Bem-Vindo! - <span style='color:#5c0eb4; font-weight: 600;'>".$_SESSION['nivelNome']."</span> ";
                            ?>
                        </span>
                    </div>
                        
                    <div id="logout" class="col">
                        <span>
                            <a onclick="logout()" class="logout" style="cursor: pointer">[Logout]</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
   	<div class="faixa">
    	<div class="container">
			<div class="jumbotron">
				<div class="header col-xs-12 col-lg-12 col-md-12 col-sm-12">
					<div class="col-xs-12 col-sm-3">
						<br>
						<a href="../../index.php"><img src="../../img/login.png"></img></a>
						<br>
					</div>
					<div class="col-xs-12 col-sm-9" id="titulao">
				<h3 class="text-muted">Inventário de Estilo de Aprendizagem de Kolb</h3>
					</div>
				</div>
				<center>
				<div class="col-xs-12">
					<h4>
					O questionário abaixo foi idealizado por David A. Kolb e descreve a maneira pela qual você aprende e como lida com ideias e situações do dia-a-dia em sua vida.<br><br>
					</h4>
				</center>

				<div class="col-xs-12" id="explicacao">

				<p>Você encontrará 12 sentenças, cada uma com quatro campos de resposta. Classifique cada campo de forma a retratar a maneira como você age ao ter que aprender algo. Procure recordar de algumas situações recentes que você teve que aprender algo novo, seja no trabalho, na universidade ou em sua vida pessoal.</p>
				<p>Classifique com 4 o complemento da sentença que caracteriza como você aprende melhor, decrescendo até indicar 1 para o complemento da sentença que caracteriza a maneira menos provável de como você aprende algo. Assegure-se de responder todas as sentenças.</p>
				</div>


			<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 campos2"> <!-- bloco de perguntas -->
			<br><br>
				<!-- Pergunta 1 -->
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<h3 id="s1">1. Enquanto aprendo...</h3>
				</div>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<label>gosto de lidar com meus sentimentos</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="1opA" class="linha1 coluna1 p1" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="1opA" class="linha1 coluna2 p1" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="1opA" class="linha1 coluna3 p1" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="1opA" class="linha1 coluna4 p1" value="4">4</label>
						</div>
						</form>
					<br><label>gosto de pensar sobre ideias</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="1opB" class="linha2 coluna1 p1" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="1opB" class="linha2 coluna2 p1" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="1opB" class="linha2 coluna3 p1" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="1opB" class="linha2 coluna4 p1" value="4">4</label>
						</div>
						</form>
					<br><label>gosto de estar fazendo coisas</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="1opC" class="linha3 coluna1 p1" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="1opC" class="linha3 coluna2 p1" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="1opC" class="linha3 coluna3 p1" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="1opC" class="linha3 coluna4 p1" value="4">4</label>
						</div>
						</form>
					<br><label>gosto de observar e escutar</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="1opD" class="linha4 coluna1 p1" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="1opD" class="linha4 coluna2 p1" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="1opD" class="linha4 coluna3 p1" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="1opD" class="linha4 coluna4 p1" value="4">4</label>
						</div>
						</form>
				</div>
				<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 campos2">
					<hr>
				</div>
		<!-- Fim da pergunta 1 -->
		
		<!-- Pergunta 2 -->
				<hr>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<h3 id="s2">2. Aprendo melhor quando...</h3>
				</div>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<label>ouço e observo com atenção</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="2opA" class="linha1 coluna1 p2" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="2opA" class="linha1 coluna2 p2" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="2opA" class="linha1 coluna3 p2" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="2opA" class="linha1 coluna4 p2" value="4">4</label>
						</div>
						</form>
					<br><label>me apoio em pensamento lógico</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="2opB" class="linha2 coluna1 p2" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="2opB" class="linha2 coluna2 p2" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="2opB" class="linha2 coluna3 p2" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="2opB" class="linha2 coluna4 p2" value="4">4</label>
						</div>
						</form>
					<br><label>confio em meus palpites e impressões</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="2opC" class="linha3 coluna1 p2" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="2opC" class="linha3 coluna2 p2" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="2opC" class="linha3 coluna3 p2" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="2opC" class="linha3 coluna4 p2" value="4">4</label>
						</div>
						</form>
					<br><label>trabalho com afinco para executar a tarefa</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="2opD" class="linha4 coluna1 p2" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="2opD" class="linha4 coluna2 p2" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="2opD" class="linha4 coluna3 p2" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="2opD" class="linha4 coluna4 p2" value="4">4</label>
						</div>
						</form>
				</div>
				<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 campos2">
					<hr>
				</div>
		<!-- Fim da pergunta 2 -->
		<!-- Pergunta 3 -->
				<hr>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<h3 id="s3">3. Quando estou aprendendo...</h3>
				</div>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<label>tendo a buscar explicações para as coisas</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="3opA" class="linha1 coluna1 p3" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="3opA" class="linha1 coluna2 p3" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="3opA" class="linha1 coluna3 p3" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="3opA" class="linha1 coluna4 p3" value="4">4</label>
						</div>
						</form>
					<br><label>sou responsável acerca das coisas</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="3opB" class="linha2 coluna1 p3" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="3opB" class="linha2 coluna2 p3" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="3opB" class="linha2 coluna3 p3" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="3opB" class="linha2 coluna4 p3" value="4">4</label>
						</div>
						</form>
					<br><label>fico quieto e concentrado</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="3opC" class="linha3 coluna1 p3" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="3opC" class="linha3 coluna2 p3" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="3opC" class="linha3 coluna3 p3" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="3opC" class="linha3 coluna4 p3" value="4">4</label>
						</div>
						</form>
					<br><label>tenho sentimentos e reações fortes</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="3opD" class="linha4 coluna1 p3" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="3opD" class="linha4 coluna2 p3" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="3opD" class="linha4 coluna3 p3" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="3opD" class="linha4 coluna4 p3" value="4">4</label>
						</div>
						</form>
				</div>
				<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 campos2">
					<hr>
				</div>
		<!-- Fim da pergunta 3 -->
		<!-- Pergunta 4 -->
				<hr>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<h3 id="s4">4. Aprendo...</h3>
				</div>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<label>sentindo</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="4opA" class="linha1 coluna1 p4" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="4opA" class="linha1 coluna2 p4" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="4opA" class="linha1 coluna3 p4" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="4opA" class="linha1 coluna4 p4" value="4">4</label>
						</div>
						</form>
					<br><label>fazendo</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="4opB" class="linha2 coluna1 p4" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="4opB" class="linha2 coluna2 p4" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="4opB" class="linha2 coluna3 p4" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="4opB" class="linha2 coluna4 p4" value="4">4</label>
						</div>
						</form>
					<br><label>observando</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="4opC" class="linha3 coluna1 p4" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="4opC" class="linha3 coluna2 p4" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="4opC" class="linha3 coluna3 p4" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="4opC" class="linha3 coluna4 p4" value="4">4</label>
						</div>
						</form>
					<br><label>pensando</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="4opD" class="linha4 coluna1 p4" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="4opD" class="linha4 coluna2 p4" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="4opD" class="linha4 coluna3 p4" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="4opD" class="linha4 coluna4 p4" value="4">4</label>
						</div>
						</form>
				</div>
				<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 campos2">
					<hr>
				</div>
		<!-- Fim da pergunta 4 -->
		<!-- Pergunta 5 -->
				<hr>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<h3 id="s5">5. Enquanto aprendo...</h3>
				</div>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<label>me abro a novas experiências</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="5opA" class="linha1 coluna1 p5" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="5opA" class="linha1 coluna2 p5" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="5opA" class="linha1 coluna3 p5" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="5opA" class="linha1 coluna4 p5" value="4">4</label>
						</div>
						</form>
					<br><label>examino todos os ângulos da questão</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="5opB" class="linha2 coluna1 p5" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="5opB" class="linha2 coluna2 p5" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="5opB" class="linha2 coluna3 p5" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="5opB" class="linha2 coluna4 p5" value="4">4</label>
						</div>
						</form>
					<br><label>gosto de analisar as coisas, desdobrá-las em partes</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="5opC" class="linha3 coluna1 p5" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="5opC" class="linha3 coluna2 p5" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="5opC" class="linha3 coluna3 p5" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="5opC" class="linha3 coluna4 p5" value="4">4</label>
						</div>
						</form>
					<br><label>gosto de testar as coisas</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="5opD" class="linha4 coluna1 p5" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="5opD" class="linha4 coluna2 p5" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="5opD" class="linha4 coluna3 p5" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="5opD" class="linha4 coluna4 p5" value="4">4</label>
						</div>
						</form>
				</div>
				<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 campos2">
					<hr>
				</div>
		<!-- Fim da pergunta 5 -->
		<!-- Pergunta 6 -->
				<hr>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<h3 id="s6">6. Enquanto estou aprendendo...</h3>
				</div>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<label>sou uma pessoa observadora</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="6opA" class="linha1 coluna1 p6" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="6opA" class="linha1 coluna2 p6" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="6opA" class="linha1 coluna3 p6" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="6opA" class="linha1 coluna4 p6" value="4">4</label>
						</div>
						</form>
					<br><label>sou uma pessoa ativa</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="6opB" class="linha2 coluna1 p6" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="6opB" class="linha2 coluna2 p6" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="6opB" class="linha2 coluna3 p6" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="6opB" class="linha2 coluna4 p6" value="4">4</label>
						</div>
						</form>
					<br><label>sou uma pessoa intuitiva</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="6opC" class="linha3 coluna1 p6" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="6opC" class="linha3 coluna2 p6" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="6opC" class="linha3 coluna3 p6" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="6opC" class="linha3 coluna4 p6" value="4">4</label>
						</div>
						</form>
					<br><label>sou uma pessoa lógica</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="6opD" class="linha4 coluna1 p6" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="6opD" class="linha4 coluna2 p6" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="6opD" class="linha4 coluna3 p6" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="6opD" class="linha4 coluna4 p6" value="4">4</label>
						</div>
						</form>
				</div>
				<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 campos2">
					<hr>
				</div>
		<!-- Fim da pergunta 6 -->
		<!-- Pergunta 7 -->
				<hr>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<h3 id="s7">7. Aprendo melhor através de...</h3>
				</div>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<label>observação</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="7opA" class="linha1 coluna1 p7" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="7opA" class="linha1 coluna2 p7" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="7opA" class="linha1 coluna3 p7" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="7opA" class="linha1 coluna4 p7" value="4">4</label>
						</div>
						</form>
					<br><label>interações pessoais</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="7opB" class="linha2 coluna1 p7" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="7opB" class="linha2 coluna2 p7" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="7opB" class="linha2 coluna3 p7" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="7opB" class="linha2 coluna4 p7" value="4">4</label>
						</div>
						</form>
					<br><label>teorias racionais</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="7opC" class="linha3 coluna1 p7" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="7opC" class="linha3 coluna2 p7" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="7opC" class="linha3 coluna3 p7" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="7opC" class="linha3 coluna4 p7" value="4">4</label>
						</div>
						</form>
					<br><label>oportunidades para experimentar e praticar</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="7opD" class="linha4 coluna1 p7" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="7opD" class="linha4 coluna2 p7" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="7opD" class="linha4 coluna3 p7" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="7opD" class="linha4 coluna4 p7" value="4">4</label>
						</div>
						</form>
				</div>
				<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 campos2">
					<hr>
				</div>
		<!-- Fim da pergunta 7 -->
		<!-- Pergunta 8 -->
				<hr>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<h3 id="s8">8. Enquanto aprendo...</h3>
				</div>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<label>gosto de ver os resultados do meu trabalho</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="8opA" class="linha1 coluna1 p8" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="8opA" class="linha1 coluna2 p8" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="8opA" class="linha1 coluna3 p8" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="8opA" class="linha1 coluna4 p8" value="4">4</label>
						</div>
						</form>
					<br><label>gosto de ideias e teorias</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="8opB" class="linha2 coluna1 p8" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="8opB" class="linha2 coluna2 p8" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="8opB" class="linha2 coluna3 p8" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="8opB" class="linha2 coluna4 p8" value="4">4</label>
						</div>
						</form>
					<br><label>penso antes de agir</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="8opC" class="linha3 coluna1 p8" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="8opC" class="linha3 coluna2 p8" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="8opC" class="linha3 coluna3 p8" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="8opC" class="linha3 coluna4 p8" value="4">4</label>
						</div>
						</form>
					<br><label>sinto-me pessoalmente envolvido no assunto</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="8opD" class="linha4 coluna1 p8" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="8opD" class="linha4 coluna2 p8" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="8opD" class="linha4 coluna3 p8" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="8opD" class="linha4 coluna4 p8" value="4">4</label>
						</div>
						</form>
				</div>
				<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 campos2">
					<hr>
				</div>
		<!-- Fim da pergunta 8 -->
		<!-- Pergunta 9 -->
				<hr>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<h3 id="s9">9. Aprendo melhor quando...</h3>
				</div>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<label>me apoio em minhas observações</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="9opA" class="linha1 coluna1 p9" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="9opA" class="linha1 coluna2 p9" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="9opA" class="linha1 coluna3 p9" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="9opA" class="linha1 coluna4 p9" value="4">4</label>
						</div>
						</form>
					<br><label>me apoio em minhas impressões</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="9opB" class="linha2 coluna1 p9" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="9opB" class="linha2 coluna2 p9" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="9opB" class="linha2 coluna3 p9" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="9opB" class="linha2 coluna4 p9" value="4">4</label>
						</div>
						</form>
					<br><label>posso experimentar coisas por mim mesmo</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="9opC" class="linha3 coluna1 p9" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="9opC" class="linha3 coluna2 p9" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="9opC" class="linha3 coluna3 p9" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="9opC" class="linha3 coluna4 p9" value="4">4</label>
						</div>
						</form>
					<br><label>me apoio em minhas ideias</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="9opD" class="linha4 coluna1 p9" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="9opD" class="linha4 coluna2 p9" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="9opD" class="linha4 coluna3 p9" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="9opD" class="linha4 coluna4 p9" value="4">4</label>
						</div>
						</form>
				</div>
				<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 campos2">
					<hr>
				</div>
		<!-- Fim da pergunta 9 -->
		<!-- Pergunta 10 -->
				<hr>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<h3 id="s10">10. Quando estou aprendendo...</h3>
				</div>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<label>sou uma pessoa compenetrada</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="10opA" class="linha1 coluna1 p10" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="10opA" class="linha1 coluna2 p10" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="10opA" class="linha1 coluna3 p10" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="10opA" class="linha1 coluna4 p10" value="4">4</label>
						</div>
						</form>
					<br><label>sou uma pessoa flexível</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="10opB" class="linha2 coluna1 p10" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="10opB" class="linha2 coluna2 p10" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="10opB" class="linha2 coluna3 p10" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="10opB" class="linha2 coluna4 p10" value="4">4</label>
						</div>
						</form>
					<br><label>sou uma pessoa responsável</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="10opC" class="linha3 coluna1 p10" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="10opC" class="linha3 coluna2 p10" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="10opC" class="linha3 coluna3 p10" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="10opC" class="linha3 coluna4 p10" value="4">4</label>
						</div>
						</form>
					<br><label>sou uma pessoa racional</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="10opD" class="linha4 coluna1 p10" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="10opD" class="linha4 coluna2 p10" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="10opD" class="linha4 coluna3 p10" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="10opD" class="linha4 coluna4 p10" value="4">4</label>
						</div>
						</form>
				</div>
				<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 campos2">
					<hr>
				</div>
		<!-- Fim da pergunta 10 -->
		<!-- Pergunta 11 -->
				<hr>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<h3 id="s11">11. Enquanto aprendo...</h3>
				</div>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<label>me envolvo todo</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="11opA" class="linha1 coluna1 p11" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="11opA" class="linha1 coluna2 p11" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="11opA" class="linha1 coluna3 p11" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="11opA" class="linha1 coluna4 p11" value="4">4</label>
						</div>
						</form>
					<br><label>gosto de observar</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="11opB" class="linha2 coluna1 p11" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="11opB" class="linha2 coluna2 p11" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="11opB" class="linha2 coluna3 p11" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="11opB" class="linha2 coluna4 p11" value="4">4</label>
						</div>
						</form>
					<br><label>avalio as coisas</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="11opC" class="linha3 coluna1 p11" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="11opC" class="linha3 coluna2 p11" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="11opC" class="linha3 coluna3 p11" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="11opC" class="linha3 coluna4 p11" value="4">4</label>
						</div>
						</form>
					<br><label>gosto de estar ativo</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="11opD" class="linha4 coluna1 p11" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="11opD" class="linha4 coluna2 p11" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="11opD" class="linha4 coluna3 p11" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="11opD" class="linha4 coluna4 p11" value="4">4</label>
						</div>
						</form>
				</div>
				<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12 campos2">
					<hr>
				</div>
		<!-- Fim da pergunta 11 -->
		<!-- Pergunta 12 -->
				<hr>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<h3 id="s12">12. Aprendo melhor quando...</h3>
				</div>
				<div class="col-xs-12 col-lg-6 col-md-6 col-sm-6 campos2">
					<label>analiso as ideias</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="12opA" class="linha1 coluna1 p12" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="12opA" class="linha1 coluna2 p12" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="12opA" class="linha1 coluna3 p12" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="12opA" class="linha1 coluna4 p12" value="4">4</label>
						</div>
						</form>
					<br><label>sou receptivo e de mente aberta</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="12opB" class="linha2 coluna1 p12" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="12opB" class="linha2 coluna2 p12" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="12opB" class="linha2 coluna3 p12" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="12opB" class="linha2 coluna4 p12" value="4">4</label>
						</div>
						</form>
					<br><label>sou cuidadoso</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="12opC" class="linha3 coluna1 p12" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="12opC" class="linha3 coluna2 p12" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="12opC" class="linha3 coluna3 p12" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="12opC" class="linha3 coluna4 p12" value="4">4</label>
						</div>
						</form>
					<br><label>sou prático</label><br>
						<form>
						<div class="radio-inline">
						<label class="radio-inline"><input type="radio" name="12opD" class="linha4 coluna1 p12" value="1">1</label>
						<label class="radio-inline"><input type="radio" name="12opD" class="linha4 coluna2 p12" value="2">2</label>
						<label class="radio-inline"><input type="radio" name="12opD" class="linha4 coluna3 p12" value="3">3</label>
						<label class="radio-inline"><input type="radio" name="12opD" class="linha4 coluna4 p12" value="4">4</label>
						</div>
						</form>
				</div>
				<div class="col-xs-12 col-lg-12 col-md-12 col-sm-12" id="campos2">
					<hr>
				</div>
				<!-- Fim da pergunta 12 -->
			</div>	
					<!-- Frase Motivacional -->
				<center>
					<i><div id="motivacional" class="frase-motivadora text-muted " style="font-size: 14px;"></div></i>
						
					<input class="submit btn btn-lg btn-success" value="Resultado" id="botao" type="submit">
				</center>
			</form>

			</div>
		</div>
	</div>
	
<!-- Box Alerta -->
		<div class="modal fade" id="modal-alerta" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog  modal-lg" id="modal-preencher">
					<div class="modal-content">
						<div class="modal-header">
							 
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button>
							<h4 class="modal-title" id="myModalLabel">Oops</h4>
						</div>
						<div class="modal-body">
							<p>Preencha todos os campos!</p>
						</div>
					</div>
				</div>
		</div>

<!-- Box resultado -->
		<div class="modal fade modal-alerta-2" id="modal-container-resultado" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog  modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							 
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> × </button>
							<h4 class="modal-title" id="myModalLabel">RESULTADO</h4>
						</div>
						<div class="modal-body">
							<h1 id="resultado"></h1>
		  
<!-- Grafico -->
		<canvas id="myChart" width="200" height="100"></canvas>
		<h3 id="resultado-final"></h3>
		
		<h4 id="resultado-final2"></h4>
							
		<h4>Baseado no resultado do seu teste, essas são áreas que combinam com você:</h4>					
		<h4 id="resultado-final-areas"></h4>					

</center>

<!-- Fim grafico / Inicio descricao -->
	<br>
	<p id="resultado-descricao"></p>

<!--Descricao dos demais estilos -->
	<br>

	<button class="btn" data-toggle="collapse" data-target="#demo">+ Conheça os demais estilos de aprendizagem</button>
	<div id="demo" class="collapse">
	<br>
	<p><b>CONVERGENTE (EA/CA)</b> – Você aprende melhor pensando e realizando. Combina o gosto
	de colocar “a mão na massa” com aspectos teóricos. Gosta de realizar atividades com
	indicações sequenciais detalhadas (como aquelas dos manuais de operação de aparelhos),
	solucionar problemas específicos e testar hipóteses (tentativa e erro). Tem habilidades em
	encontrar aplicações práticas para ideias e teorias. Pessoas desse estilo possuem poucas
	habilidades sociais e intrapessoais, preferindo ambientes de aprendizagem mais
	tranquilos (ex.: gosta de trabalha sozinho realizando tarefas técnicas sem se relacionarem
	com outras pessoas). Parecem se sair melhor em situações nas quais existe uma única
	resposta ou solução correta para cada pergunta ou problema. Não tem dificuldades ao
	experimentar inovações para solucionar problemas práticos. Esse estilo também é
	conhecido como PRAGMÁTICO.</p>

	<p><b>ACOMODADOR (EC/EA)</b> – Você aprende melhor experimentando e realizando, como, por
	exemplo, através de atividades práticas, apresentações, role-plays e debates. Combina o
	gosto de colocar “a mão na massa” com atividades concretas. Tem capacidade de se
	sobressair e acomodar ou adaptar a circunstâncias imediatas específicas. Utiliza mais a
	intuição do que a lógica e tem a tendência a se arriscar mais a ousar mais. Costuma utilizar
	a opinião de outras pessoas ao invés das suas próprias, por isso geralmente faz muitas
	perguntas. Assume uma abordagem prática e vivencial. É sociável e gosta de trabalhar em
	equipe. Geralmente exerce um papel importante em situações onde são necessárias ações
	e iniciativas para a realização de tarefas. Por terem pouca habilidade analítica são
	impulsivas e as vezes é percebido como impaciente e pressionador. Esse estilo também é
	conhecido como ATIVISTA.</p>

	<p><b>ASSIMILADOR (CA/OR)</b> – você aprende melhor combinando observação e pensamento,
	por isso suas preferências por palestras, conferências e aulas. Para eles, ideias e conceitos
	abstratos são mais importantes do que pessoas e pode ser percebido como pouco sociável.
	Tem facilidade com números e modelos conceituais, preferindo especulações abstratas em
	detrimento de situações práticas. Compreende as informações de forma ampla e as
	organizam de forma clara e lógica. Tem propensão para a carreira científica. Gosta de
	explorar modelos analíticos e de ter tempo para pensar e refletir sobre as coisas. Esse
	estilo também é conhecido como TEÓRICO.</p>

	<p><b>DIVERGENTE (OR/EC)</b> – você aprende melhor combinando sensações com observações,
	ou seja através de atividades práticas seguidas de um retorno. Possui muita sensibilidade
	artística e conseguem ver as coisas de perspectivas diferentes. Prefere observar ao invés
	de agir. Suas estratégias para a solução de problemas iniciam coletando informações para
	em seguida usarem a criatividade e a inventividade para oferecer mais de uma solução
	possível. A denominação “divergentes” se dá pelo fato de terem bom desempenho em
	situações que requerem geração de ideias, como grupos de trabalho e brainstorms.
	Possuem vasto interesse cultural e gostam de pessoas. Preferem trabalhar em grupo,
	ouvindo sugestões com mente aberta e recebendo feedbacks pessoais. Gostam de
	autonomia na busca de conhecimento. Esse estilo também é conhecido como REFLEXIVO.</p>
	</div>
	<br><br>
	<hr>

<input button type="button" data-dismiss="modal" value="Refazer teste" id="refazer">

						</div>
						<div class="modal-footer">
							 
						</div>
					</div>
					
				</div>
				
			</div>
			
<br>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
 

    

  </body>
</html>