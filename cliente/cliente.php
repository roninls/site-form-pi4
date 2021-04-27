<?php 
    session_start();
    if(!empty($_SESSION['id'])){

    }else{
        $_SESSION['msg'] = "Área Restrita";
        header("Location: ../login.php");
    }

    if($_SESSION['usuarioNiveisAcessoId'] == "1"){
        
    }elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){

    }elseif($_SESSION['usuarioNiveisAcessoId'] == "0"){

    }else{
        $_SESSION['msg'] = "Área Restrita";
        header("Location: ../cadastro/restrito.php"); 
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title><?php echo "CLIENTE :: ".$_SESSION['nome']." "?></title>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="chrome=1;IE=edge" />
        
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.png"/>
        <link rel="icon" type="image/png" href="../img/favicon.png"/>
        <link rel="apple-touch-icon" href="../img/favicon.png"/>

        <link href="../cadastro/css/login.css" rel="stylesheet" type="text/css" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../css/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

        <script src="../cadastro/js/sizzle.js" type="text/javascript"></script>
        <script src="../cadastro/js/script_start.js" type="text/javascript"></script>
        <script src="../cadastro/js/class_ajax.js" type="text/javascript"></script>
        <script src="../cadastro/js/class_cookie.js" type="text/javascript"></script>
        <script src="../cadastro/js/class_storage.js" type="text/javascript"></script>
        <script src="../cadastro/js/global.js" type="text/javascript"></script>
        <script src="../cadastro/js/jquery.js" type="text/javascript"></script>

        <!-- PLUGIN -->
        <link href="css/plugin/settings.css" rel="stylesheet" type="text/css" media="screen" />

        <script type="text/javascript">
            function login() {
            window.open("login.php");
        }
        </script>
        

        <style rel="stylesheet" type="text/css">
            #nav-logout {
                align: right;
                border-style: solid!important;
                border-color: #5c0eb4!important;
                border-radius: 3px!important;
                border-width: 2px!important;
                }
        </style>

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
                                <img id="image" src="../img/logo-white.png" class="img-fluid img-pointer" width="188" height="50" />
                            </div>
                        </div>
                        
                        <div class="col ola-php">
                            <span>
                                <?php
                                    echo "Olá <span style='color:#5c0eb4; font-weight: 600;'>".$_SESSION['nome']."</span>, Bem-Vindo! - <span style='color:#5c0eb4; font-weight: 600;'>".$_SESSION['nivelNome']."</span>";
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
        
        <!-- Applications -->
        <div>
            <a href="https://cgpeers.to/login.php" target="_self">
            <img src="../img/logos/cgpeers.png">
            </a>
        </div>
        <!-- End applications -->

        <script type="text/javascript">
        cookie.set('cookie_test',1,1);
        if (cookie.get('cookie_test') != null) {
            cookie.del('cookie_test');
        } else {
            $('#no-cookies').show();
        }
        </script>
                </td>
            </tr>
        </table>
        <div id="foot">
            <span style="color: #fff"> &copy; 2021 <a href="#" class="namefooter"><b>TEIA Formulário</b></a>. Todos os direitos reservados.</span>
        </div>

        <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../js/plugins/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="../js/clock.js" type="text/javascript"></script>
    </body>
</html>
