<?php ob_start() ?>

<div id="page-wrapper">   <br>        

      <div class="row">
        <div class="col-lg-12">
          <center><h2>Galeria</h2></center>
          <div class="panel panel-success">
            <div class="panel panel-heading">
              <center><h4>Ingresar Nueva Imagen</h2></center>
            </div>
            <div class="panel panel-body">
              <form method="POST" action="/CMS/index.php/enter_image_model" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-4">
                    <label>Seleccione Álbum</label>
                    <select class="form-control" name="name_album">
                          <?php if(isset($alb)) {
                            foreach($alb as $alb){?>
                            <option><?php echo $alb['title'];?></option>
                          <?php }} ?>
                       </select>
                  </div>
                  <div class="col-md-4">
                    <label>Seleccione Imagen</label>
                    <input class="form-control" name="foto" id="foto" type="file" required></input>
                  </div>
                  <div class="col-md-4">
                    <label>Ingresar</label>
                    <input class="form-control btn btn-success" type="submit" value="Ingresar">
                    </div>   
                </div>
              </form>
            </div>
          </div>
           <center><h4>Albums</h4></center>
          <div class="panel panel-primary">
            <div class="panel-heading">
             
              <form method="POST" action="/CMS/index.php/enter_album_model">
                <div class="row">
                  <div class="col-md-4">
                    <label>Título</label>
                    <input class="form-control" name="title" id="title" type="text" required> 
                  </div>
                  <div class="col-md-4">
                    <label>Descripción</label>
                    <input class="form-control" name="description" type="text" required> 
                  </div>
                  <div class="col-md-4">
                    <label>Ingresar</label>
                    <input class="form-control btn btn-success" type="submit" value="Ingresar"></div>   
                </div>
              </form>      
            </div>
            <div class="panel-body">
              <br>
              <table    class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <thead id="nom2" name="rol">
                  <tr>
                      <th data-field="id" data-sortable="true" data-align="center" id="name" class="1">Titulo</th>
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Descripción</th>
                      <th data-field="name" data-sortable="true" data-align="center" id="status" class="1">Acciones</th>                   
                  </tr>
                  </thead>
                  <?php if(isset($alb1)) {?>
                    <tbody id="Fila">  
                    <?php foreach($alb1 as $alb1){ ?>
                      <tr>                                 
                        <td><?php echo $alb1['title'];?></td>
                        <td style="width:200px"><?php echo $alb1['description'];?></td> 
                        <td> 
                          <form action="/CMS/index.php/delete_album_model" method="post"> 
                            <input name="id" value="<?php echo $alb1['id'];?>" hidden>
                             <input name="album" value="<?php echo $alb1['title'];?>" hidden>
                            <button type="submit" class="btn btn-danger glyphicon glyphicon-remove"></button>
                          </form>
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




