<?php ob_start() ?>

<div id="page-wrapper"> 
    <div class="row">
      <div class="col-lg-12"><br>
        <div class="panel panel-success">
          <div class="panel-heading">
              <center><h2>Modificar Publicacion</h2></center>            
          </div>
          <form action="/CMS/index.php/update_publication_model" method="post" enctype="multipart/form-data">  
          <?php if(isset($publ)){?>      
          <div class="panel-body">
                      
            <?php foreach($publ as $publ){ ?> 
              <div class="col-md-6">
                <img src=".<?php echo $publ['image'];?>" width="480"><br><br>
                <input class="form-control" name="foto" id="foto" type="file"><br> 
              </div>
              <div class="col-md-6">
                 <input name="id" value="<?php echo $publ['id'];?>" hidden>
                 <label>Titulo</label> 
                 <input class="form-control" id="" name="pub_tittle" required value="<?php echo $publ['title'];?>"><br>
                 <label>Contenido</label>
                 <textarea class="form-control" id="" name="pub_content" rows="5" required><?php echo $publ['body'];?></textarea>   
                 <script type="text/javascript">
                          CKEDITOR.replace("pub_content");
                  </script>            
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




