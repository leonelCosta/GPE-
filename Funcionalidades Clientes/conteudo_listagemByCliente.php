 <?php 
//session_start();    

include_once("database_connection.php");

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 

?>
<!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Minhas Solicitações de Emprestimos</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Minhas Solicitações</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Breadcrumb Area End ##### -->
   

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-news-area " style="padding: 10px 0 20px 0; max-height: 600px;"> 
        <div class="container">                    

            <!-- Inicio do formulario -->
         <div class="post-a-comment-area clearfix" > 

               <?php if(isset($_SESSION['idUser'])){

                echo '<table width="100%">';
                echo '<thead><tr>';
                echo '<th>Nome Completo</th>';
                echo '<th>Endereço</th>';
                echo '<th>Telefone</th>';
                echo '<th>E-mail</th>';
                echo '</tr></thead>';
                echo '<tbody>';
                //Neste momento estou a pegar todos os regitros do utilizador com base o seu nome, caso o nome não for um campo mutavel a ideia 
                //é usar o Numero de SAP do Utilizador... ou BI ou algum outro campo que seja unico do proprio Cliente.
                $nusuario = $_SESSION['usuarioNome'];
                $query="SELECT * FROM tb_solicitacao where nome_completo = '$nusuario'";
                $sql = mysqli_query($connect,$query);
                while ($row = mysqli_fetch_assoc($sql)) {
                   echo '<tr>';
                   echo '<td>' . $row['nome_completo'] . '</td>';
                   echo '<td>' . $row['morada'] . '</td>';
                   echo '<td>' . $row['telefone'] . '</td>';
                   echo '<td>' . $row['email'] . '</td>';
                   echo '</tr>';
                }

                echo '</tbody></table>';


               }else{

                     echo '<h2 class="mb-50">Faça o   <a href="login/login.html"><span style="color: red; font-size: 26px;">Login </span></a>   e aparecerá as tuas solicitações aqui!</h2>';

               }

                


                ?>
                       
                
             
            


        </div><!-- FIM  da ROW principal-->
</div><!-- FIM do formulario or do Conteiner que contem o formulario -->

</div>                        



</div>

</div>
</div>

</section>

                

   