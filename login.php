<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="br" lang="br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="ronindesign">
    
        <title>Login :: TEIA</title>

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"/>
        <link rel="icon" type="image/png" href="img/favicon.png"/>
        <link rel="apple-touch-icon" href="img/favicon.png"/>

        <!-- CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">

        <!-- JS -->
        <script src="cadastro/js/jquery.js" type="text/javascript"></script>

        <script>
            function cadastrar(){
                window.open('cadastro/cadastrar.php', '_parent');
                            // ^^ link
            }
        </script>
  
    </head>
    
    <body onload="initClock()">
        <div id="head"></div>
        <div class="container">
            <div class="centralizar">
                <div class="col-md">    
                    <form class="form-signin auth_form" name="login" id="loginform" method="post" action="cadastro/valida.php">

                        <div class="text-center">
                            <div class="logo">
                                <img src="img/login.png" class="img-fluid img-pointer" width="60%"/>
                                <ul>
                                    <li><a class="baixologo" href="login.php">Home</a></li>
                                    <li><a class="baixologo" href="login.php">Login</a></li>
                                </ul>
                            </div>
                        </div>
                        <br><br>

                        <label for="inputEmail" class="sr-only">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required="required" maxlength="50" placeholder="E-mail" autofocus="autofocus" />
                        <label for="inputPassword" class="sr-only">Senha</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required" maxlength="100" pattern=".{6,100}" />
                        <button class="btn btn-lg btn-danger btn-block btn-color submit" type="submit" name="btnLogin" value="Login">Login</button>
                        <input type="checkbox" id="keeplogged" name="keeplogged" value="1" />
                        <label for="keeplogged" class="keeplogged" >Remember me</label>
                        
                    </form>
                    <button onclick="cadastrar()" class="btn btn-lg btn-danger btn-block btn-color btn-cad" type="submit" name="btnLogin" value="cadastrar">Cadastrar</button>
                        <br>
                    <p class="text-center text-danger">
                        <?php 
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                        ?>
                    </p>
                    <p class="text-center text-success">
                        <?php 
                        if(isset($_SESSION['msgcad'])){
                            echo $_SESSION['msgcad'];
                            unset($_SESSION['msgcad']);
                        }
                        ?>
                    </p>

                    <div class="col-md">
                        <div class="text-center">
                        
                            <!-- <a  onclick="cadastrar()"><span><strong>CADASTRE-SE</strong></span></a> -->
                            <div>
                                <!--inicio clock-->
                                <div class="datetime">
                                    <div class="date">
                                        <span id="dayname">Dia</span>,
                                        <span id="daynum">00</span> de
                                        <span id="month">Mes</span>,
                                        <span id="year">Ano</span>
                                    </div>
                                    <div class="time">
                                        <span id="hour">00</span>:
                                        <span id="minutes">00</span>:
                                        <span id="seconds">00</span>
                                        <span id="period">AM</span>
                                    </div>
                                </div>
                                <!--fim clock-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript">
        cookie.set('cookie_test',1,1);
        if (cookie.get('cookie_test') != null) {
            cookie.del('cookie_test');
        } else {
            $('#no-cookies').show();
        }
        </script>

        <footer id="foot">
            <span style="color: #fff"> &copy; 2021 <a href="#" class="namefooter"><b>TEIA Formulário</b></a>. Todos os direitos reservados.</span>
        </footer>
        <script src="js/clock.js" type="text/javascript"></script>
  </body>
</html>
