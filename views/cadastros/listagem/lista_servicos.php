<?php require'../../../includes/topo.php';  ?>


<div class="sl-pagebody">
        
     <div class="card pd-20 pd-sm-40 ">


          <div class="row">
                <div class="col-md-9">
                  <h6 class="card-body-title">Serviços cadastrados</h6>
                  <p class="mg-b-20 mg-sm-b-30 upper letras_finas">Para editar o cadasto o clique no ícone </p>
                </div>

                <div class="col-md-3">
                  <a  href="cadastros/servicos/novo" class="btn btn-info pull-right upper letras_finas botao-mobile">Novo Produto</a>
                </div>  
           </div>
                

          <div class="table-responsive">
            <table class="table table-striped mg-b-0">
              <thead>
                <tr>
                  <th>
                    <label class="ckbox mg-b-0">
                      <input type="checkbox"><span></span>
                    </label>
                  </th>
                  <th>Nome do serviço</th>
                  <th>Cód</th>
                  <th>Status</th>
                  <th>Valor</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>


                <?php 

                $x=1;
                while ($x <= 10) {
                 echo' <tr>
                          <td>
                            <label class="ckbox mg-b-0">
                              <input type="checkbox"><span></span>
                            </label>
                          </td>
                          <td>Limpeza de radiador</td>
                          <td>56</td>
                          <td>Ativo</td>
                          <td>R$ 150,00</td>
                          <td><a href=""><i class="icon ion-compose"></i></a></td>
                          <td><a href=""><i class="icon ion-trash-b"></i></a></td>
                    </tr>'
                    ;

                    $x++;

                }

                
              ?>

               
               
               
              </tbody>
            </table>
          </div><!-- table-responsive -->
        </div><!-- card -->   
        

</div>

    



<?php require'../../../includes/footer.php'; ?>