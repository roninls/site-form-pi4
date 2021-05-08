<script type="text/javascript">
    function cadastrar() {
    window.open("pags/cadastrar.php", '_parent');
    }
</script>

<form class="form-signin auth_form" name="login" id="loginform" method="post" action="cadastro/valida.php">

    <div class="text-center">
        <div class="logo">
            <img src="img/login.png" class="img-fluid img-pointer" width="60%"/>
            <ul>
                <li><a class="baixologo" href="index.php">Home</a></li>
                <li><a class="baixologo" href="index.php">Login</a></li>
            </ul>
        </div>
    </div>
    <br><br>

    <label for="inputEmail" class="sr-only">Email</label>
    <input type="text" name="email" id="email" class="form-control" required="required" maxlength="50" placeholder="E-mail" autofocus="autofocus" />
    <label for="inputPassword" class="sr-only">Senha</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="required" maxlength="100" pattern=".{6,100}" />
    <button class="btn btn-lg btn-danger btn-block btn-color submit" type="submit" name="btnLogin" value="Login">Entrar</button>
    <input type="checkbox" id="keeplogged" name="keeplogged" value="1" />
    <label for="keeplogged" class="keeplogged" >Lembrar login</label>
    
</form>
<div class="text-center">
    <div>Primeira vez aqui? Cadastre-se!</div>
</div>
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

