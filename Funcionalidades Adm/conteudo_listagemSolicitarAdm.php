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
                        <h2>Listagem dos Clientes - Solicitação de Emprestimo</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Listagem dos Emprestimos</li>
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

                   
              <?php 
                echo '<table width="100%">';
                echo '<thead><tr>';
                echo '<th>Nome Completo</th>';
                echo '<th>Endereço</th>';
                echo '<th>Telefone</th>';
                echo '<th>E-mail</th>';
                echo '</tr></thead>';
                echo '<tbody>';

                $query="SELECT * FROM tb_solicitacao where tipoUser = 'cliente'";
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
               ?>
            


        </div><!-- FIM  da ROW principal-->
</div><!-- FIM do formulario or do Conteiner que contem o formulario -->

</div>                        



</div>

</div>
</div>

</section>

                

   