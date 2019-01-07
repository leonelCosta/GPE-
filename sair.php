<?php

if (isset($_POST['sair'])) {   
   
    session_start();
    unset($_SESSION['usuarioNome']);
    unset($_SESSION['idUser']);
    session_destroy();       
    header("Location: index.php?test=vcestaemindex");
 
} 

?>