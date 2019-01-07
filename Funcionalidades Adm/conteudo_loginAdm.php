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
                                <li class="breadcrumb-item active" aria-current="page">Aprovação das Solicitações de Emprestimo - Alteração do User e Senha </li>
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

           <h5>Regras a Seguir</h5>
        <p>O nome do Utilizador deve o Primeiro e Ultimo Nome separado por um ponto <span style="color: red; font-size: 16px;"> EX: Leonel Antonio da Costa ... leonel.costa</span></p>

        <p>A Senha do Utilizador deve ser o Ultimo e o Primeiro Nome junto mais numero de telefone <span style="color: red; font-size: 16px;"> EX: Leonel Antonio da Costa ... costaleonel929496884</span></p>

        <?php 
           $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

           if (isset($_GET['nomeCompleto'])) {
               $nome = $_GET['nomeCompleto'];
            } else {
        // Fallback behaviour goes here
          }
           //$nome = filter_input(INPUT_GET,'nomeCompleto',FILTER_SANITIZE_URL);

          // echo $nome;
        ?>
        <form method="POST" action="processa.php"><!-- Inicio do Formulario -->
                      
          <div class="row">
                  <div class="col-lg-auto">
                            <div class="form-group">
                              <label  style="font-weight:700;" >Nome Cliente: <?php  echo $nome; ?></label>
                                                        
                             
                        </div>
                    </div>                    
            </div>              
          <div class="row">
                  <div class="col-lg-auto">
                            <div class="form-group">
                             
                              <label style="font-weight:700;"  for="txtUsername">User Name:</label>
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
                      <input type="hidden" name="txtId" value="<?php  echo $id; ?>"> 
                       <input type="submit" name="form_aprovar" class="btn credit-btn mt-30"  value="Aprovar e Atualizar(senha e User)"  >    
                      </div>
               </div>
            </div>

          </form>


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