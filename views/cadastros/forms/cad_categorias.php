<?php require'../../../includes/topo.php';  ?>


<div class="sl-pagebody">  
  
<form method="post" action="cadastros/categorias/save">
<input type="hidden" name="id_categoria" value="<?php echo $id; ?>">  

    <div class="card pd-20 pd-sm-40">
            
      <h6 class="card-body-title">Cadastro de Categorias</h6>
      <p class="mg-b-20 mg-sm-b-30 letras_finas upper">Campos marcados com <span class="tx-danger">*</span> são obrigatórios.</p>

        <div class="form-layout">
          
            <div class="row mg-b-10">
            
                <div class="col-lg-10">
                  <div class="form-group">
                    <label class="form-control-label"><span class="tx-danger">*</span>Categoria:</label>
                    <input class="form-control" required type="text" name="nome_categoria" placeholder="INFORME O NOME DA CATEGORIA" value="<?php echo $pesquisas->PesquisaDados('nome_categoria','cad_categorias',$id,'id_categoria');  ?>">
                  </div>
                </div>

                <div class="col-lg-2">
                  <div class="form-group mg-b-10-force">
                    <label class="form-control-label"><span class="tx-danger">*</span>Ativo: </label>
                    <select class="form-control select2" name="ativo_categoria" required>
                      <option value="1">SIM</option>
                      <option value="0">NÃO</option>
                    </select>
                  </div>
              </div>

            </div>

            <div class="form-layout-footer">
                  <button class="btn btn-success mg-r-5 upper botao-mobile">SALVAR</button>
                  <button class="btn btn-info upper pull-right botao-mobile">Salvar e adicionar outro</button>
            </div>

        </div>    

    </div>    

</form>  


</div>

<?php require'../../../includes/footer.php'; ?>