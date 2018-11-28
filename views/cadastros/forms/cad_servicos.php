
<?php require'../../../includes/topo.php';  ?>


<div class="sl-pagebody">  
  
<form>
          
      <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Cadastro de Serviços</h6>
          <p class="mg-b-20 mg-sm-b-30 letras_finas upper">Campos marcados com <span class="tx-danger">*</span> são obrigatórios.</p>
          
          <div class="form-layout">
            <div class="row mg-b-25">

             
                <div class="col-lg-5 col-sx-12">
                  <div class="form-group">
                    <label class="form-control-label"><span class="tx-danger">*</span>Nome do serviço: </label>
                    <input class="form-control" type="text" name="nome" value="">
                  </div>
                </div>

                <div class="col-lg-3 col-sx-12">
                  <div class="form-group">
                    <label class="form-control-label"><span class="tx-danger">*</span>Código interno: </label>
                    <input class="form-control" type="text" name="nome" value="">
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"><span class="tx-danger">*</span>Tipo: </label>
                    <select class="form-control select2" data-placeholder="Choose country">
                      <option value="USA">Prestado</option>
                      <option value="UK">Tomado</option>
                    </select>
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"><span class="tx-danger">*</span>Status: </label>
                    <select class="form-control select2" data-placeholder="Choose country">
                      <option value="USA">Ativo</option>
                      <option value="UK">Desativado</option>
                    </select>
                  </div>
                </div>

                <div class="col-lg-3">
                  <div class="form-group">
                    <label class="form-control-label"><span class="tx-danger">*</span>Valor: </label>
                    <input class="form-control" type="text" name="text" value="" placeholder="">
                  </div>
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