<?php require'../../../includes/topo.php';  ?>


<div class="sl-pagebody">  
  
<form>
          
      <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Cadastro de Produtos</h6>
          <p class="mg-b-20 mg-sm-b-30 letras_finas upper">Campos marcados com <span class="tx-danger">*</span> são obrigatórios.</p>

          
          <div class="form-layout">
            <div class="row mg-b-25">
            
                    <div class="col-lg-6 col-sx-12">
                      <div class="form-group">
                        <label class="form-control-label"><span class="tx-danger">*</span>Nome do produto: </label>
                        <input class="form-control" type="text" name="" value="" placeholder="Digite o nome do produto">
                      </div>
                    </div>

                    <div class="col-lg-2 col-sx-12">
                      <div class="form-group">
                        <label class="form-control-label">Código:</label>
                        <input class="form-control" type="text" name="" value="" placeholder="567">
                      </div>
                    </div>

                    <div class="col-lg-4">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label"><span class="tx-danger">*</span>Categoria: </label>
                        <select class="form-control select2" data-placeholder="Choose country">
                          <option value="USA">Peças</option>
                          <option value="UK">Suprimento</option>
                        </select>
                      </div>
                    </div>            

                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">EAN: </label>
                        <input class="form-control" type="text" name="text" value="" placeholder="">
                      </div>
                    </div>

                    <div class="col-lg-2">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Valor de venda</label>
                        <input class="form-control" type="text" name="" value="" placeholder="">
                      </div>
                    </div>

                    <div class="col-lg-2">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Valor de custo</label>
                        <input class="form-control" type="text" name="" value="" placeholder="">
                      </div>
                    </div>
                 
                    <div class="col-lg-2">
                      <div class="form-group">
                        <label class="form-control-label"><span class="tx-danger">*</span>Estoque Atual: </label>
                        <input class="form-control" type="text" name="text" value="" placeholder="">
                      </div>
                    </div>

                    <div class="col-lg-2">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Estoque Mínimo</label>
                        <input class="form-control" type="text" name="" value="" placeholder="">
                      </div>
                    </div>

    
               <div class="col-lg-12">

                  <div id="accordion" class="accordion" role="tablist" aria-multiselectable="true">
                      
                        <div class="card">
                          <div class="card-header" role="tab" id="headingOne">
                            <h6 class="mg-b-0">
                              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="tx-gray-900 transition upper letras_finas">
                                Informar dados usados na nota fiscal (Opcional)
                              </a>
                            </h6>
                          </div><!-- card-header -->

                          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="card-body">

                               <div class="row">

                                  <div class="col-lg-3 mb-3">
                                    <div class="form-group mg-b-10-force">
                                      <label class="form-control-label"><span class="tx-danger">*</span>Und. de medida: </label>
                                      <select class="form-control select2" data-placeholder="Choose country">
                                        <option value="USA">Kg</option>
                                        <option value="UK">Un</option>
                                      </select>
                                    </div>
                                    </div><!-- col-4 -->


                                  <div class="col-md-3 mb-3">
                                    <label for="lastName">NCM</label>
                                    <input type="text" class="form-control" name=""  placeholder="" value="">
                                  </div>


                                   <div class="col-md-2 mb-3">
                                      <label for="lastName">CEST</label>
                                      <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>


                                    <div class="col-md-2 mb-3">
                                      <label for="lastName">Peso Líquido</label>
                                      <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>

                                    <div class="col-md-2 mb-3">
                                      <label for="lastName">Peso Bruto</label>
                                      <input type="text" class="form-control" name="" placeholder="" value="">
                                    </div>

                                  </div>
                            </div>
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header" role="tab" id="headingTwo">
                            <h6 class="mg-b-0">
                              <a class="collapsed transition upper letras_finas" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Informar fornecedor
                              </a>
                            </h6>
                          </div>
                          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="card-body">

                              <div class="row">

                                  <div class="col-md-11 mb-3">
                                    <label for="firstName">Fornecedores</label>
                                    <input type="text" class="form-control" name="" placeholder="" value="">
                                  </div>

                                  <div class="col-md-1 mb-3 lixeira">
                                    <a href="" class="lixeira_icon"><i class="icon ion-trash-a"></i></a>
                                  </div>

                                  <div class="col-lg-12">
                                    <button href="" class="btn btn-secondary">Adicionar um novo fornecedor</button>
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