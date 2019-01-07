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
                        <h2>Gerir Dividas | Solicitações de Emprestimos</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dividas Clientes</li>
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

              //<input type="submit" name="form_aprovar"  value="Aprovar"> 
                echo '<table width="100%">';
                echo '<thead><tr>';
                echo '<th>Nome Completo</th>';
                echo '<th>Endereço</th>';
                echo '<th>Telefone</th>';              
                echo '<th>Valor Solitado(Kz)</th>';
                 echo '<th>Valor a ser Pago(Kz)</th>';
                echo '<th>Data Pedido</th>';
                echo '<th>Data de Pagamento</th>';
                 echo '<th>Estado</th>';
                echo '<th>Operação</th>';
                echo '</tr></thead>';
                echo '<tbody>';

                $query="SELECT * FROM tb_solicitacao where estadoAprovacao ='Aprovado' and estadoPagamento ='Nao Pago' or estadoPagamento ='Pago' ";
                $sql = mysqli_query($connect,$query);
                while ($row = mysqli_fetch_assoc($sql)) {
                  $valorRecebido = $row['qtd_emprestada'];
                  $TrintaPorcento = ($valorRecebido*0.3);
                  $qtdAdevolver = ($valorRecebido + $TrintaPorcento);

                   echo '<tr>';
                   echo '<td>' . $row['nome_completo'] . '</td>';
                   echo '<td>' . $row['morada'] . '</td>';
                   echo '<td>' . $row['telefone'] . '</td>';                   
                   echo '<td>' . $row['qtd_emprestada'] . '</td>';
                   echo '<td>'.$qtdAdevolver.'</td>';
                   echo '<td>' . $row['data_emprestimo'] . '</td>';
                   echo '<td>' . $row['data_devolucao'] . '</td>';
                   echo '<td>' . $row['estadoPagamento'] . '</td>';
                   echo '<td><form action="processa.php" method="POST">
                   <input type="hidden" id="txtId" name="txtId" value="'. $row['id_solicitacao'] .'">
                                                <button type="submit" class="bt btn-success btn-sm" name="form_divida">
                                                    Confirmar Pagamento
                                                </button>                                        
                                        </form></td>';
                   
                   echo '</tr>';
                   $TrintaPorcento = 0;
                   $valorRecebido = 0;
                   $qtdAdevolver = 0;
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

                

   