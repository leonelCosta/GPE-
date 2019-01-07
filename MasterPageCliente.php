<?php 
session_start();    
?>
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

    <div><?php include('headerCliente.php');?></div>
    <div><?php include($page_content);?></div>
    <div><?php include('FooterCliente.php');?></div>    
    

    <!-- ##### All Javascript Script ##### -->
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