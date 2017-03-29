<?php ob_start() ?>
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="crediavales-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="project-12-label"><center>Nuevo</center></h4>
      </div><form action="/CMS/index.php/enter_publication_model" method="post" enctype="multipart/form-data">
      <div class="modal-body">        
           
               <div class="row">
                   <div class="col-md-6">
                      <label>Fecha</label>
                       <input class="form-control" name="fecha" id="fecha" type="date" required></input>
                   </div>
                   <div class="col-md-6">
                      <label>Titulo</label>
                      <input class="form-control" id="" name="pub_tittle" required><br>
                   </div>
                   <div class="col-md-6">
                      <label>Foto</label>
                       <input class="form-control" name="foto" id="foto" type="file" required></input>
                   </div>
                   <div class="col-md-6">                         
                       <label>Autor Foto</label>
                       <input class="form-control" name="autor" id="autoro" type="text" required></input>
                   </div>
                   <div class="col-md-12"><br>
                      <label>Categoría</label>
                      <select class="form-control" name="categoria">
                        <option>Papa Francisco</option>
                        <option>Voluntariado</option>
                        <option>Logística</option>
                        <option>Comisión Pastoral</option>
                        <option>Comisión Liturgica</option>
                        <option>Comunicaciones</option>
                      </select>
                   </div>
                   <div class="col-md-12"><br>
                       <label>Contenido</label>
                       <textarea class="form-control" id="pub_content" name="pub_content" rows="5" required></textarea>
                       <script type="text/javascript">
                          CKEDITOR.replace("pub_content");
                       </script>
                   </div>   
               </div>
           
      </div>
      <div class="modal-footer">
      <center>
      <button type="submit" class="btn btn-success">Ingresar</button>
      <a type="button"class="btn btn-primary " data-toggle="modal" data-dismiss="modal">Cancelar</a>
      </center>
      </div></form>

      
    </div>
  </div>
</div>
<div id="page-wrapper">   <br>        

      <div class="row">
        <div class="col-lg-12">
          <center><h2>Publicaciones</h2></center>
          <div class="panel panel-primary">
            <div class="panel-heading">
            <a type="button"class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal"  data-target="#new" id="btn_new"></a>      
            </div>
            <div class="panel-body">
              <table    class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead id="nom2" name="rol">
                  <tr>
                      <th data-field="id" data-sortable="true" data-align="center" id="name" class="1">Titulo</th>
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Contenido</th>   
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Imagen</th> 
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Acciones</th>                   
                  </tr>
                  </thead>
                  <?php if(isset($pub)) {?>
                    <tbody id="Fila">  
                           
                    <?php foreach($pub as $pub){ 
                      $aMostrar=substr($pub['body'], 0, 30);                             
                      ?>
                      <tr>                                 
                        <td><?php echo $pub['title'];?></td>
                        <td style="width:200px"><?php echo $aMostrar;?></td> 
                        <td><img src=".<?php echo $pub['image'];?>" width="100"></td> 
                        <td>
                          <div class="col-md-6">
                          <form action="/CMS/index.php/verpublicacion" method="post"> 
                            <input name="id" value="<?php echo $pub['id'];?>" hidden>
                            <button type="submit" class="btn btn-warning glyphicon glyphicon-repeat"></button>
                          </form></div>
                          <div class="col-md-6">
                          <form action="/CMS/index.php/delete_publication_model" method="post"> 
                            <input name="id" value="<?php echo $pub['id'];?>" hidden>
                            <button type="submit" class="btn btn-danger glyphicon glyphicon-remove"></button>
                          </form></div>
                        </td>                                               
                      </tr>
                    <?php }}  ?>
                    </tbody>
              </table>

            </div>
          </div>
        </div>
      </div><!--/.row-->
        </div>


<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>




