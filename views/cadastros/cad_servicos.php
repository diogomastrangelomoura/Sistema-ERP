
<?php require'../../includes/topo.php';  ?>

<div class="sl-mainpanel">
      
      <!-- TITULOS DA PÁGINA -->
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="home">HOME</a>        
        <a href="clientes" class="breadcrumb-item" href="home">LISTAGEM DE SERVIÇOS</a>        
        <span class="breadcrumb-item active">CADASTRO DE SERVIÇO</span>
      </nav>
      <!-- TITULOS DA PÁGINA -->

      <div class="sl-pagebody">
        <div class="sl-page-title">
          
          <div class="card pd-10 pd-sm-40">
          <h6 class="card-body-title">Cadastro de Serviço</h6>
          <p class="mg-b-20 mg-sm-b-30">Campos com o simbolo <span class="tx-danger">*</span> são obrigatórios</p>

          <br>
          <div class="form-layout">
            <div class="row mg-b-25">

              <form>
              <div class="col-lg-5 col-sx-12">
                <div class="form-group">
                  <label class="form-control-label">Nome do serviço: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="nome" value="">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-3 col-sx-12">
                <div class="form-group">
                  <label class="form-control-label">Código interno: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="nome" value="">
                </div>
              </div><!-- col-4 -->

              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Tipo: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country">
                    <option value="USA">Prestado</option>
                    <option value="UK">Tomado</option>
                  </select>
                </div>
              </div><!-- col-4 -->


              <div class="col-lg-2">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Status: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose country">
                    <option value="USA">Ativo</option>
                    <option value="UK">Desativado</option>
                  </select>
                </div>
              </div><!-- col-4 -->


             

              <div class="col-lg-3">
                <div class="form-group">
                  <label class="form-control-label">Valor: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="text" value="" placeholder="">
                </div>
              </div><!-- col-4 -->


             


         

          

          <div class="col-lg-12 ajusta_botao" style="margin-top: 20px">
          	 <hr class="linha">
             <div class="row">
                  
                <div class="col-md-6"> 
                  <button href="" class="btn btn-success">Salvar</button>
                </div>

                <div class="col-md-6 pull-right"> 
                  <a href="" class="btn btn-warning mg-r-5 pull-right">Salvar este cliente e adicionar outro</a>
                </div>
              </div>
          </div>

          </form>


          </div>
      </div>
    </div>
  </div>

</div>

<?php require'../../includes/footer.php'; ?>