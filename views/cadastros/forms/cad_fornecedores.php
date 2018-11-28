<?php require'../../../includes/topo.php';  ?>


<div class="sl-pagebody">  
  
<form>
          
      <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Cadastro de Fornecedor</h6>
        <p class="mg-b-20 mg-sm-b-30 letras_finas upper">Campos marcados com <span class="tx-danger">*</span> são obrigatórios.</p>
        
          <div class="form-layout">
            <div class="row mg-b-25">
              
                
                <div class="col-lg-7 col-sx-12">
                  <div class="form-group">
                    <label class="form-control-label"><span class="tx-danger">*</span>Nome: </label>
                    <input class="form-control" type="text" name="nome" value="" placeholder="Digite o nome completo">
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label"><span class="tx-danger">*</span>CNPJ: </label>
                    <input class="form-control" type="text" name="text" value="" placeholder="">
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"><span class="tx-danger">*</span>Tipo: </label>
                    <select class="form-control select2" data-placeholder="Choose country">
                      <option value="USA">Juridico</option>
                      <option value="UK">Físico</option>
                    </select>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label"><span class="tx-danger">*</span>CNPJ: </label>
                    <input class="form-control" type="text" name="text" value="" placeholder="">
                  </div>
                </div>

                <div class="col-lg-5">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Razão social</label>
                    <input class="form-control" type="text" name="" value="" placeholder="">
                  </div>
                </div>

                <div class="col-lg-4">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"><span class="tx-danger">*</span>Contribuinte: </label>
                    <select class="form-control select2" data-placeholder="Choose country">
                      
                      <option value="USA">Não contribuinte</option>
                      <option value="UK">Contribuinte</option>
                  
                    </select>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label"><span class="tx-danger">*</span>Inscrição estadual: </label>
                    <input class="form-control" type="text" name="text" value="" placeholder="">
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label">Inscrição Municipal</label>
                    <input class="form-control" type="text" name="" value="" placeholder="">
                  </div>
                </div>


              <div class="col-lg-12">

                    <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
                        
                        <div class="card">
                          <div class="card-header" role="tab" id="headingOne">
                            <h6 class="mg-b-0">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-900 transition  upper letras_finas">
                                Informar contato para este fornecedor
                              </a>
                            </h6>
                          </div><!-- card-header -->

                          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body">

                               <div class="row">

                                  <div class="col-md-3 mb-3">
                                    <label for="firstName">Fone comercial</label>
                                    <input type="text" class="form-control" name="" placeholder="" value="">
                                  </div>


                                  <div class="col-md-3 mb-3">
                                      <label for="lastName">Celular</label>
                                      <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>

                                  <div class="col-md-3 mb-3">
                                    <label for="lastName">E-mail</label>
                                    <input type="text" class="form-control" name=""  placeholder="" value="">
                                  </div>

                                    <div class="col-md-3 mb-3">
                                      <label for="lastName">Contato</label>
                                      <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>

                                  </div>
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" role="tab" id="headingTwo">
                            <h6 class="mg-b-0">
                              <a class="collapsed transition  upper letras_finas" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Endereço 
                              </a>
                            </h6>
                          </div>
                          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body">

                              <div class="row">

                                  <div class="col-md-3 mb-3">
                                    <label for="firstName">Cep:</label>
                                    <input type="text" class="form-control" name="" placeholder="" value="">
                                  </div>


                                  <div class="col-md-6 mb-6">
                                    <label for="lastName">Endereço</label>
                                    <input type="text" class="form-control" name=""  placeholder="" value="">
                                  </div>


                                   <div class="col-md-3 mb-3">
                                      <label for="lastName">Numero</label>
                                      <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>


                                    <div class="col-md-3 mb-3">
                                      <label for="lastName">Complemento</label>
                                      <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>


                                    <div class="col-md-3 mb-3">
                                      <label for="lastName">Bairro</label>
                                      <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>

                                    <div class="col-lg-2">
                                      <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"><span class="tx-danger">*</span>Estado: </label>
                                        <select class="form-control select2" data-placeholder="Choose country">
                                          <option value="USA">SP</option>
                                          <option value="UK">AL</option>
                                        </select>
                                      </div>
                                    </div>

                                    <div class="col-lg-4">
                                      <div class="form-group mg-b-10-force">
                                        <label class="form-control-label"><span class="tx-danger">*</span>Cidade: </label>
                                        <select class="form-control select2" data-placeholder="Choose country">
                                          <option value="USA">Lençois </option>
                                          <option value="UK">AL</option>
                                        </select>
                                      </div>
                                    </div>

                                  </div>
                            </div>
                          </div>
                        </div>
           
              
                </div><!-- accordion -->
            </div>

          
          </div><!--FECHA ROW -->  


      <div class="form-layout-footer">
        <button class="btn btn-success mg-r-5 upper botao-mobile">SALVAR</button>
        <button class="btn btn-info upper pull-right botao-mobile">Salvar e adicionar outro</button>
      </div>

    </div><!--FECHA FORM LAYOUT -->      

  </div><!--FECHA CARD -->        

</form>
</div>


          
<?php require'../../../includes/footer.php'; ?>