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
                          <label style="font-weight:700; "  for="txtDataEmprestimo">Data de Emprestimo:</label>
                          <input type="text" id="txtDataEmprestimo" class="form-control" name="txtDataEmprestimo" placeholder="Digite a Data" required>
                      </div>
                  </div> 

                   <div class="col-md-6 col-xs-2">
                        <div class="form-group">
                          <label style="font-weight:700;" for="txtDataDevolucao">Data de Devolução:</label>
                          <input type="text" id="txtDataDevolucao" class="form-control" name="txtDataDevolucao" placeholder="Digite a Data" required>
                      </div>
                  </div> 

                   <div class="col-md-6 col-xs-2">
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