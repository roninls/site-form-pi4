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

<html>
    <head>
        <title><?php echo "CLIENTE :: ".$_SESSION['nome']." "?></title>
        <meta http-equiv="X-UA-Compatible" content="chrome=1;IE=edge" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content=""/>
        <meta name="keywords" content="ronindesign"/>
        <meta name="author" content="ronindesign"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png"/>
        <link rel="icon" type="image/png" href="../img/favicon.png"/>
        <link rel="apple-touch-icon" href="../img/favicon.png"/>

        <link href="../cadastro/css/login.css" rel="stylesheet" type="text/css" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../css/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="../js/jquery-1.11.2.min.js" type="text/javascript"></script>

        <script type="text/javascript">
            function logout() {
            window.open("sair.php", '_parent');
            }
            
            function forum() {
                window.open("../cliente/cliente.php", '_parent');
            }

            function painel() {
                window.open("../cliente/painel.php", '_parent');
            }

        </script>
    </head>
    <body>
        <!-- Site preloader -->
        <section id="preloader">
            <div class="site-spinner"></div>
        </section>
        <!-- End Site preloader -->

        <div id="top-head">
            <div id="rownav">
                <div class="row">

                    <div class="col">
                        <div class="img-fluid">
                            <img id="image" src="../img/login.png" class="img-fluid img-pointer img-mobile"/>
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
                            <a href="../cadastro/sair.php" class="logout">[Logout]</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

            <br>
            <br>
            <br>
            <br>
            <br>
        <div class="container">
            <div class="row">
                
                <div class="col-md-12 text-center">
                    <h2 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">Inventário de Estilo de </span>Aprendizagem de Kolb
                    </h2>
                    <p class="max-width-700 leader">
                        <strong>O questionário abaixo foi idealizado por David A. Kolb e descreve a maneira pela qual você aprende e como lida com ideias e situações do dia-a-dia em sua vida.</strong>
                        <br>
                        <br>
                        Você encontrará 12 sentenças, cada uma com quatro campos de resposta. Classifique cada campo de forma a retratar a maneira como você age ao ter que aprender algo. Procure recordar de algumas situações recentes que você teve que aprender algo novo, seja no trabalho, na universidade ou em sua vida pessoal.
                        <br>
                        <br>
                        Classifique com 4 o complemento da sentença que caracteriza como você aprende melhor, decrescendo até indicar 1 para o complemento da sentença que caracteriza a maneira menos provável de como você aprende algo. Assegure-se de responder todas as sentenças.
                    </p>

                    <h2 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">Preencha o </span>Formulário
                    </h2>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12 text-center">
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">1. </span>Enquanto aprendo...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Gosto de lidar com meus sentimentos:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Gosto de pensar sobre ideias:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Gosto de estar fazendo coisas:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form> 
                    
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Gosto de observar e escutar:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opD" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opD" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opD" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="1opD" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>    
                </div>
                
                
                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">2. </span>Aprendo melhor quando...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Ouço e observo com atenção:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Me apoio em pensamento lógico:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Confio em meus palpites e impressões:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Trabalho com afinco para executar a tarefa:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opD" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opD" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opD" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="2opD" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">3. </span>Quando estou aprendendo...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Tendo a buscar explicações para as coisas:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou responsável acerca das coisas:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Fico quieto e concentrado:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Tenho sentimentos e reações fortes:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opD" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opD" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opD" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="3opD" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">4. </span>Aprendo...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sentindo:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Fazendo:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Observando:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Pensando:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opD" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opD" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opD" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="4opD" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">5. </span>Enquanto aprendo...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Me abro a novas experiências:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Examino todos os ângulos da questão:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Gosto de analisar as coisas, desdobrá-las em partes:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Gosto de testar as coisas:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opD" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opD" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opD" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="5opD" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">6. </span>Enquanto estou aprendendo...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou uma pessoa observadora:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou uma pessoa ativa:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou uma pessoa intuitiva:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou uma pessoa lógica:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opD" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opD" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opD" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="6opD" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">7. </span>Aprendo melhor através de...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Observação:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Interações pessoais:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Teorias racionais:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Oportunidades para experimentar e praticar:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opD" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opD" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opD" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="7opD" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">8. </span>Enquanto aprendo...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Gosto de ver os resultados do meu trabalho:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Gosto de ideias e teorias:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Penso antes de agir:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sinto-me pessoalmente envolvido no assunto:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="8opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>


                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">9. </span>Aprendo melhor quando...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Me apoio em minhas observações:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Me apoio em minhas impressões:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Posso experimentar coisas por mim mesmo:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Me apoio em minhas ideias:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">10. </span>Quando estou aprendendo...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou uma pessoa compenetrada:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou uma pessoa flexível:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou uma pessoa responsável:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou uma pessoa racional:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">11. </span>Enquanto aprendo...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Me envolvo todo:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Gosto de observar:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Avalio as coisas:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Gosto de estar ativo:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">12. </span>Aprendo melhor quando...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Analiso as ideias:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou receptivo e de mente aberta:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou cuidadoso:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou prático:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="12opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">9. </span>Aprendo melhor quando...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Me apoio em minhas observações:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Me apoio em minhas impressões:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Posso experimentar coisas por mim mesmo:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Me apoio em minhas ideias:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="9opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">10. </span>Quando estou aprendendo...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou uma pessoa compenetrada:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou uma pessoa flexível:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou uma pessoa responsável:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Sou uma pessoa racional:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="10opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">11. </span>Enquanto aprendo...
                    </h5>
                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Me envolvo todo:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opA" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opA" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opA" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opA" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Gosto de observar:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opB" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opB" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opB" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opB" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Avalio as coisas:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>

                    <form method="post" action="">
                        <p class="max-width-700" style="font-size: 17px; font-weight: 300;"><strong>Gosto de estar ativo:</strong></p>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="1" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 1
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="2" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 2
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="3" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 3
                        </label>
                        <label class="radio-inline" style="color: white; font-size: 24px">
                            <input type="radio" name="11opC" value="4" style="--placeholder-color:rgba(232, 229, 227, 0.6) !important;"> 4
                        </label>
                    </form>
                </div>

                <div class="col-md-12 text-center">
                <br>
                <hr>
                <br>
                    <h5 class="title-pg color-white">
                        <span class="text-light" style="color: #fff!important;">Pense como um próton e </span> mantenha-se positivo.
                    </h5>

                    <button class="btn btn-lg btn-danger btn-block btn-color">Resultado</button>
                </div>
                    
                

            </div>
        </div>
        <br>
            <br>
            <br>
            <br>
            <br>
        <footer id="foot">
            <span style="color: #fff"> &copy; 2021 <a href="#" class="namefooter"><b>TEIA Formulário</b></a>. Todos os direitos reservados.</span>
         </footer>
         
        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/plugins/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="../js/clock.js" type="text/javascript"></script>

    </body>
</html>