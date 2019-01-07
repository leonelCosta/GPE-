 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Gestão de Emprestimos - DEVEDORES</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <!-- Active DataTimePicker -->
    
    

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

   <!-- ##### Header Area Start ##### -->
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
                           
                             <a href="login/login.html"  title=""><img src="img/core-img/login.png" alt=""> 
                                 <span>LOGIN</span></a> 
                        </div>
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
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="formSolicitar.html">Solicitar Emprestimos</a></li>
                                    <li><a href="#">Meu Historico</a>
                                        
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

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Formulario - Solicitação de Emprestimo</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Solicitar Emprestimos</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area " style="padding: 20px 0 0 0;"> 
        <div class="container">                    

            <!-- Inicio do formulario -->
         <div class="post-a-comment-area clearfix" > 

          <h2 class="mb-50">Insira os dados solicitados abaixo:</h2>
          
              <form method="POST" action="processa.php"><!-- Inicio do Formulario -->
                <p style="font-weight:700;" >Nome Completo: <input type="text" id="txtNome" name="txtNome" class="form-control" placeholder="Digite o Nome Completo" required ></p>         
                        
                <div class="row"><!-- Inicio da ROW principal -->

                  <div class="col-md-6 col-xs-6">
                            <div class="form-group">
                              <label style="font-weight:700;"  for="txtEmpresa">Nome da Empresa:</label>
                              <input type="text" class="form-control" id="txtEmpresa" name="txtEmpresa" placeholder="Digite o Nome da Empresa" required>
                        </div>
                    </div><!--  FIM-->

                    <div class="col-md-6 col-xs-6">
                
                              <label style="font-weight:700;"  for="txtTipoPagamento">Forma de Pagamento:</label>
                              <select class="form-control" id="txtTipoPagamento" data-size="5" data-live-search="true" data-width="100%" name="txtTipoPagamento" required>
                                <option value="" selected disabled>Escolha uma opção</option>
                                <option  value="M">Mult-Caixa</option>
                                 <option value="C">Cheque Bancario</option>                                                     
                            </select>
            
                  </div>   



                          <div class="col-md-6 col-xs-6">
                            <div class="form-group">
                              <label style="font-weight:700;"  for="txtMorada">Morada:</label>
                              <input type="text" class="form-control" id="txtMorada" name="txtMorada" placeholder="Digite a tua Morada" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                          <label style="font-weight:700;"  for="txtTelefone">Telefone:</label>
                          <input type="text" id="txtTelefone" class="form-control" name="txtTelefone" placeholder="Digite o Nº Telefone" required>
                      </div>
                  </div>
                  <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                          <label style="font-weight:700;"  for="txtIban">IBAN:</label>
                          <input type="text" id="txtIban" class="form-control" name="txtIban" placeholder="Digite o IBAN" required>
                      </div>
                  </div> 

                  <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                          <label style="font-weight:700;"  for="txtNumConta">Nº da Conta:</label>
                          <input type="text" id="txtNumConta" class="form-control" name="txtNumConta" placeholder="Digite o Nº da Conta" required>
                      </div>
                  </div> 
                  <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                          <label style="font-weight:700;"  for="txtDataEmprestimo">Data de Emprestimo:</label>
                          <input type="text" id="txtDataEmprestimo" class="form-control" name="txtDataEmprestimo" placeholder="Digite a Data" required>
                      </div>
                  </div> 

                   <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                          <label style="font-weight:700;" for="txtDataDevolucao">Data de Devolução:</label>
                          <input type="text" id="txtDataDevolucao" class="form-control" name="txtDataDevolucao" placeholder="Digite a Data" required>
                      </div>
                  </div> 

                   <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                          <label style="font-weight:700;"  for="txtValorEmprestimo">Quantia a Solicitar:</label>
                          <input type="text" id="txtValorEmprestimo" class="form-control" name="txtValorEmprestimo" placeholder="Digite o valor que pretende Solicitar" required>
                      </div>
                  </div>  

                   <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                          <label style="font-weight:700;"  for="txtSAP">Nº de SAP:</label>
                          <input type="text" id="txtSAP" class="form-control" name="txtSAP" placeholder="Digite o Nº de SAP valido" required>
                      </div>
                  </div> 

                  <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                          <label style="font-weight:700;"  for="txtEmail">Email:</label>
                          <input type="text" id="txtEmail" class="form-control" name="txtEmail" placeholder="Digite o Email valido" required>
                      </div>
                  </div> 
                  <div class="col-md-6 col-xs-6">
                        <div class="form-group">
                          
                      </div>
                  </div>  

                  <!-- 
                  <div class="col-md-6 col-xs-6">
                
                              <label style="font-weight:700;"  for="txtJuros">Juros(%):</label>
                              <select class="form-control" id="txtJuros" data-size="5" data-live-search="true" data-width="100%" name="txtJuros" required>
                                <option selected disabled>Escolha uma opção</option>
                                <option>10%</option>
                                 <option>20%</option>
                                  <option>30%</option>
                                   <option>40%</option>
                                    <option>50%</option>                    
                            </select>
            
                  </div> -->          

            

        <div class="col-md-6 col-xs-6">
            <div class="form-group">    
             <input type="submit" name="form_action" id="form_action" class="btn credit-btn mt-30"  value="Inviar Solicitação"  >    
            </div>
        </div>
</form><!-- FIM  do meu Formulario -->
            


        </div><!-- FIM  da ROW principal-->
</div><!-- FIM do formulario or do Conteiner que contem o formulario -->

</div>                        



</div>

</div>
</div>

</section>

                

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area " style="width: 100%;">
     

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copywrite-content d-flex flex-wrap justify-content-between align-items-center">
                            <!-- Footer Logo -->
                            <a href="index.html" class="footer-logo"><img src="img/core-img/logo.png" alt=""></a>

                            <!-- Copywrite Text -->
                            <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### 
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    
 <!-- Active jquery ui - frameWork -->
    <script src="js/jquery-ui.js"></script>

    <!-- Mascara do Formulario -->
    <script src="js/jquery.maskedinput.js"></script>
    

    <script type="text/Javascript">    

        $(document).ready(function(){        

           $( function() {
                    //datepicker( "option", "dateFormat", "dd/mm/yy" );
                    $("#txtDataEmprestimo").datepicker({ dateFormat: 'dd-mm-yy' });
                    $("#txtDataDevolucao").datepicker({ dateFormat: 'dd-mm-yy' });
            } );
        });  //fim do documentantação 

         $(function() {
        $.mask.definitions['~'] = "[+-]";
        
        $("#txtTelefone").mask(" 999 99-99-99");   
        $("#txtIban").mask("AO06.****.****.****.****.****.*");    

        
    });


    </script>


   
</body>

</html>