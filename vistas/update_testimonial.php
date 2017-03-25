<?php ob_start() ?>

<div id="page-wrapper"> 
    <div class="row">
      <div class="col-lg-12"><br>
          
        <div class="panel panel-success">
          <div class="panel-heading"><div class="row">
           <center><h2>Modificar Testimonio</h2></center>
          </div>
            
            
          </div>
          <form action="/CMS/index.php/update_user_model" method="post" id="frm_user">  
          <?php if(isset($test)){?>      
          <div class="panel-body">
            <?php foreach($test as $test){ ?>               
              <div class="col-md-12" >
                 <input name="id" value="<?php echo $test['id'];?>" hidden>
                 <label>Nombre de Usuario</label> 
                 <input class="form-control" id="name" name="user_name" required  value="<?php echo $test['name'];?>"><br>
                 <label>Email</label> 
                 <input class="form-control" id="password" name="user_password" required  value="<?php echo $test['email'];?>"><br>
                 <label>Contenido</label>
                 <textarea class="form-control" name="test_content" rows="3" required ><?php echo $test['content'];?></textarea>
             </div>
          </div>
            <?php }}  ?>
            <div class="panel-footer">
              <center>
              <button type="submit" class="btn btn-success" id="btn_modificar" >Modificar</button>
              <a type="button"class="btn btn-primary " id="btn_cancelar" >Cancelar</a>
              </center>
            </div>
          </form> 
        </div>
      </div>
    </div><!--/.row-->
</div>


<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>


