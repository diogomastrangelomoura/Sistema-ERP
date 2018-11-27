<?php require'../../includes/topo.php';  ?>

<div class="sl-mainpanel">
      
      <!-- TITULOS DA PÁGINA -->
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="home">HOME</a>        
        <span class="breadcrumb-item active">CLIENTES</span>
      </nav>
      <!-- TITULOS DA PÁGINA -->

      <div class="sl-pagebody">
        <div class="sl-page-title">
          


           <div class="card pd-20 pd-sm-40 mg-t-10">

      
            <h6 class="card-body-title">Lista de cadastro de categorias</h6>
            <p class="mg-b-20 mg-sm-b-30">Para editar o cliente clique no icone </p>
          
            <div class="xxx" style="margin-top: -50px; margin-bottom: 20px">
              <a  href="cad_categorias" class="btn btn-info pull-right">Nova Categoria</a>
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
                  <th>Categoria</th>
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
                          <td>Peças automotivas</td>
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
      </div>


</div>
    



<?php require'../../includes/footer.php'; ?>