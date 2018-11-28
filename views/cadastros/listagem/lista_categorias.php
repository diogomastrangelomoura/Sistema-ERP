<?php require'../../../includes/topo.php';  ?>


<div class="sl-pagebody">
        
           <div class="card pd-20 pd-sm-40">

              <div class="row">
                <div class="col-md-9">
                  <h6 class="card-body-title">categorias cadastradas</h6>
                  <p class="mg-b-20 mg-sm-b-30 upper letras_finas">Para editar o cadasto o clique no ícone </p>
                </div>

                <div class="col-md-3">
                  <a  href="cadastros/categorias/novo" class="btn btn-info pull-right upper letras_finas botao-mobile">Nova Categoria</a>
                </div>  
              </div>  

                <div class="table-responsive">
                  <table class="table table-striped table-hover mg-b-0">
                    <thead>
                      <tr>
                        <th width="5">
                          <label class="ckbox mg-b-0">
                            <input type="checkbox" class="marca_todos"><span></span>
                          </label>
                        </th>
                        <th>Categoria</th>
                        <th width="20"></th>                        
                        <th width="5"></th>                        
                      </tr>
                    </thead>
                    <tbody>


                      <?php 

                      $sql = $db->select("SELECT id_categoria, nome_categoria, ativo_categoria 
                        FROM cad_categorias 
                        ORDER BY ativo_categoria DESC, nome_categoria");
                      if($db->rows($sql)){
                        while ($row = $db->expand($sql)) {

                          $class="success";
                          $status = "";
                          if($row['ativo_categoria']==0){
                            $class="danger";
                            $status = "INATIVA";  
                          }

                           
                           echo '<tr>';
                              
                              echo '<td>';
                                echo '<label class="ckbox mg-b-0">';
                                  echo '<input type="checkbox" class="marca_checkbox"><span></span>';
                                echo '</label>';
                              echo '</td>';
                              
                              echo  '<td class="letras_finas upper">';
                                echo $row['nome_categoria'];
                              echo '</td>';

                              echo '<td class="valign-middle">';
                                echo '<span class="tx-'.$class.'">'.$status.'</span>';
                              echo '</td>';
                                    
                              echo '<td>';
                                echo '<a href="cadastros/categorias/edita/'.$row['id_categoria'].'" class="icones_listagem"><i class="icon ion-compose"></i></a>';
                              echo '</td>';
                                    
                           echo '</tr>';

                        }
                      } else {

                          echo '<tr>';
                              
                              echo '<td colspan="10" class="text-center">';
                                echo 'NENHUM RESULTADO ENCONTRADO.';                              
                              echo '</td>';
                              
                                    
                           echo '</tr>';

                      }
                      
                    ?>

                    </tbody>
                  </table>
                </div><!-- table-responsive -->
          
          </div><!-- card -->
     
        
</div>

    

<?php require'../../../includes/footer.php'; ?>