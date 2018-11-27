<?php require'../../includes/topo.php';  ?>

<div class="sl-mainpanel">
      
      <!-- TITULOS DA PÁGINA -->
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="home">HOME</a>        
        <a href="clientes" class="breadcrumb-item" href="home">LISTAGEM DE CATEGORIAS</a>        
        <span class="breadcrumb-item active">CADASTRO DE CLIENTE</span>
      </nav>
      <!-- TITULOS DA PÁGINA -->

      <div class="sl-pagebody">
        <div class="sl-page-title">
          
          <div class="card pd-10 pd-sm-40">
          <h6 class="card-body-title">Cadastro de Categorias</h6>
          <p class="mg-b-20 mg-sm-b-30">Campos com o simbolo <span class="tx-danger">*</span> são obrigatórios</p>

          <br>
          <div class="form-layout">
            <div class="row mg-b-25">


              <div class="col-lg-12 col-sx-12">
                <div class="form-group">
                  <label class="form-control-label">Categoria: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="nome" value="" placeholder="Digite o nome completo">
                </div>
              </div><!-- col-4 -->

            </div>



          <div class="col-lg-12 ajusta_botao" style="margin-top: 20px">
             <hr class="linha">
             <div class="row">
                  
                <div class="col-md-6"> 
                  <button href="" class="btn btn-success">Salvar</button>
                </div>

                <div class="col-md-6 pull-right"> 
                  <a href="" class="btn btn-warning mg-r-5 pull-right">Salvar esta categoria e adicionar outro</a>
                </div>
              </div>
          </div>

           


          </div>
      </div>
    </div>
  </div>

</div>

<?php require'../../includes/footer.php'; ?>