


    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Top Contact Info -->
                        <div class="top-contact-info d-flex align-items-center">
                           <?php 
                                if(isset($_SESSION['usuarioNome'])){
                               echo '<a href="login/login.html"  title=""><img src="img/core-img/login.png" alt=""> 
                                 <span>Nome do Usuario: '.$_SESSION['usuarioNome'].'</span></a>'; 

                                 echo '| <form action="sair.php" method="POST">
                                                <button class="login100-form-btn" name="sair">
                                                    Sair
                                                </button>                                        
                                        </form>';
                            }else{

                            echo ' <a href="login/login.html"  title=""><img src="img/core-img/login.png" alt=""> 
                                 <span>LOGIN</span></a> ';

                        }?>  
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="credit-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="creditNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="formSolicitar.php">Solicitar Emprestimos</a></li>
                                    <li><a href="verSolicitacao_Cliente.php">Meu Historico</a>
                                        
                                    </li>
                                                                       
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Contact -->
                        <div class="contact">
                            <a href="#"><img src="img/core-img/call2.png" alt=""> Área - Cliente</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->


