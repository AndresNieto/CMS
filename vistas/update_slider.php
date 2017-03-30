<?php ob_start() ?>

<div id="page-wrapper"> 
    <div class="row">
      <div class="col-lg-12"><br>
        <div class="panel panel-success">
          <div class="panel-heading">
              <center><h2>Modificar Aviso</h2></center>            
          </div>
          <form action="/CMS/index.php/update_slider_model" method="post" enctype="multipart/form-data">  
          <?php if(isset($sli)){?>      
          <div class="panel-body">
                      
            <?php foreach($sli as $sli){ ?> 
              <div class="col-md-6">
                <img src=".<?php echo $sli['image'];?>" width="480"><br><br>
                <input class="form-control" name="foto" id="foto" type="file"><br> 
              </div>
              <div class="col-md-6">
                 <input name="id" value="<?php echo $sli['id'];?>" hidden>
                 <label>Titulo</label> 
                 <input class="form-control" id="" name="title" required value="<?php echo $sli['title'];?>"><br>
                 <label>Enlace</label>
                 <input class="form-control" id="" name="url" required value="<?php echo $sli['url'];?>"><br>        
             </div>
            </div>
            <?php }}  ?>
            <div class="panel-footer">
              <center>
              <button type="submit" class="btn btn-success">Modificar</button>
              <a type="button"class="btn btn-primary " href="/CMS/index.php/publicaciones">Cancelar</a>
              </center>
            </div>
          </form> 
        </div>
      </div>
    </div><!--/.row-->
</div>


<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>




