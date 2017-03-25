<?php ob_start() ?>
<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="crediavales-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="project-12-label"><center>Nuevo</center></h4>
      </div>
      <form action="/CMS/index.php/enter_course_model" method="post" enctype="multipart/form-data">
      <div class="modal-body">
         <div class="row">
             <div class="col-md-6">
               <label>Nombre del Curso</label>
               <input class="form-control" id="" name="cou_name" required>
             </div>
             <div class="col-md-3">
               <label>Imagen</label>
               <input class="form-control" name="foto" id="foto" type="file"></input>
             </div>
             <div class="col-md-3">
               <label>Tipo de Curso</label>
               <select class="form-control" name="cou_type" required>
                 <option>Academico</option>
                 <option>Musical</option>
                 <option>Deportivo</option>
               </select>
             </div>
             <div class="col-md-12"><br>
               <label>Descripción</label>
               <textarea class="form-control" id="" name="cou_description" rows="5" required></textarea>
             </div>
             <div class="col-md-12"><br>
               <center><h2>Audiencia</h2></center><br>
             </div>
             <div class="col-md-4">
               <center><label>Niños</label><br>
               <input type="checkbox" name="children" checked data-off-text="No" data-on-text="Si"></center>  
             </div>
             <div class="col-md-4">
               <center><label>Jóvenes</label><br>
               <input type="checkbox" name="young" checked data-off-text="No" data-on-text="Si"></center>  
             </div>
             <div class="col-md-4">
               <center><label>Adultos</label><br>
               <input type="checkbox" name="adult" checked data-off-text="No" data-on-text="Si"></center><br>
             </div>
         </div>
      </div>
      <div class="modal-footer">
        <center>
        <button type="submit" class="btn btn-success">Ingresar</button>
        <a type="button" class="btn btn-danger"  data-dismiss="modal">Cancelar</a>
        </center>
      </div>
      </form>      
    </div>
  </div>
</div>
<div id="page-wrapper">   <br>        

      <div class="row">
        <div class="col-lg-12">
          <center><h2>Cursos</h2></center>
          <div class="panel panel-primary">
            <div class="panel-heading">
            <a type="button"class="btn btn-success glyphicon glyphicon-plus" data-toggle="modal"  data-target="#new" id="btn_new"></a>      
            </div>
            <div class="panel-body">
              <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead id="nom2" name="rol">
                  <tr>
                      <th data-field="id" data-sortable="true" data-align="center" id="name" class="1">Titulo</th>
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Descripción</th>   
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Niños</th>
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Jovenes</th>
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Adultos</th> 
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Imagen</th>
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Acciones</th>                   
                  </tr>
                  </thead>
                  <?php if(isset($course)){?>
                    <tbody id="Fila">
                  
                    <?php foreach($course as $course){ ?>
                    <tr >                                 
                      <td ><?php echo $course['name'];?></td>
                      <td style="width:100px"><?php echo $course['description'];?></td> 
                      <td ><?php echo $course['children'];?></td>
                      <td ><?php echo $course['young'];?></td>
                      <td ><?php echo $course['adult'];?></td>  
                      <td><img src=".<?php echo $course['image'];?>" width="100"></td> 
                      <td>
                        <div class="col-md-6">
                        <form action="/CMS/index.php/vercurso" method="post"> 
                          <input name="id" value="<?php echo $course['id'];?>" hidden>
                          <button type="submit" class="btn btn-warning glyphicon glyphicon-repeat"></button>
                        </form></div>
                        <div class="col-md-6">
                        <form action="/CMS/index.php/delete_course_model" method="post"> 
                          <input name="id" value="<?php echo $course['id'];?>" hidden>
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




