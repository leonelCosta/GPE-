 <?php 
//session_start();    

include_once("database_connection.php");

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} 

?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title">Definir User name e Senha</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
        <h5>Regras a Seguir</h5>
        <p>O nome do Utilizador deve o Primeiro e Ultimo Nome separado por um ponto <span style="color: red; font-size: 16px;"> EX: Leonel Antonio da Costa ... leonel.costa</span></p>

        <p>A Senha do Utilizador deve ser o Ultimo e o Primeiro Nome junto mais numero de telefone <span style="color: red; font-size: 16px;"> EX: Leonel Antonio da Costa ... costaleonel929496884</span></p>

        <?php 
           $id = filter_input(INPUT_POST,'idSolicitacao',FILTER_SANITIZE_NUMBER_INT);

           echo 'o id é :';$id
        ?>
        <form method="POST" action="processa.php"><!-- Inicio do Formulario -->
                      
                        
          <div class="row">
                  <div class="col-lg-auto">
                            <div class="form-group">
                              <label style="font-weight:700;"  for="txtUsername">Nome do Utilizador:</label>
                              <input type="" class="form-control" id="txtUsername" name="txtUsername" placeholder="Digite o User Name" required>
                        </div>
                    </div>                    
            </div>
            <div class="row">
                    <div class="col-lg-auto">
                                <div class="form-group">
                                  <label style="font-weight:700;"  for="txtSenha">Senha:</label>
                                  <input type="password" id="txtSenha" class="form-control" name="txtSenha" placeholder="Digite a Senha" required>
                              </div>
                      </div>
              </div>
            <div class="row">
                <div class="col-md-6 col-xs-6">
                      <div class="form-group">    
                       <input type="submit" name="form_aprovar" class="btn credit-btn mt-30"  value="Aprovar e Atualizar(senha e User)"  >    
                      </div>
               </div>
            </div>

          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/13.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Aprovação | Solicitações</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Aprovação das Solicitações de Emprestimo </li>
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
                echo '<th>E-mail</th>';
                echo '<th>Valor Solitado(Kz)</th>';
                echo '<th>Data Pedido</th>';
                echo '<th>Data de Pagamento</th>';
                echo '<th>Operação</th>';
                echo '</tr></thead>';
                echo '<tbody>';

                $query="SELECT * FROM tb_solicitacao where estadoAprovacao ='Nao Aprovado'";
                $sql = mysqli_query($connect,$query);
                while ($row = mysqli_fetch_assoc($sql)) {
                   echo '<tr>';
                   echo '<td>' . $row['nome_completo'] . '</td>';
                   echo '<td>' . $row['morada'] . '</td>';
                   echo '<td>' . $row['telefone'] . '</td>';
                   echo '<td>' . $row['email'] . '</td>';
                   echo '<td>' . $row['qtd_emprestada'] . '</td>';
                   echo '<td>' . $row['data_emprestimo'] . '</td>';
                   echo '<td>' . $row['data_devolucao'] . '</td>';
                   echo '<td><form action="formLoginAlterar.php?id='. $row['id_solicitacao'] . '&nomeCompleto='. $row['nome_completo'] . '" method="POST">
                   
                   <button type="submit" id="btAprovar" class="btn btn-info " data-toggle="modal" data-target="#myModal">
                                                    Aprovar
                                                </button>
                                                    
                                                                                      
                          </form></td>';
                   
                   echo '</tr>';
                }

                echo '</tbody></table>';
               ?>
            


        </div><!-- FIM  da ROW principal-->
</div><!-- FIM do formulario or do Conteiner que contem o formulario -->

</div>                        
<!--
<button type="button" id="btAprovar" class="btn btn-info " data-toggle="modal" data-target="#myModal">
                                                    Aprovar
                                                </button>  -->

</div>

</div>
</div>

</section>

                

   