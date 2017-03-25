<?php ob_start() ?>
<div class="modal fade" id="audi" tabindex="-1" role="dialog" aria-labelledby="crediavales-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="project-12-label"><center>Modificar Audiencia</center></h4>
      </div>
      <form action="/CMS/index.php/update_audience_model" method="post" enctype="multipart/form-data">
      <div class="modal-body">
         <div class="row">
             <?php foreach($cou as $cour){?>
              <input name="id_audience" hidden value="<?php echo $cour['id'];?>">
             <?php };  ?>
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
        <button type="submit" class="btn btn-warning">Modificar</button>
        <a type="button" class="btn btn-danger"  data-dismiss="modal">Cancelar</a>
        </center>
      </div>
      </form>      
    </div>
  </div>
</div>
<div id="page-wrapper"> 
    <div class="row">
      <div class="col-lg-12"><br>
        <div class="panel panel-success">
          <div class="panel-heading">
              <center><h2>Modificar Curso</h2></center>            
          </div>
          <form action="/CMS/index.php/update_course_model" method="post" enctype="multipart/form-data">  
          <?php if(isset($cou)){?>      
          <div class="panel-body">
            <div class="row">          
            <?php foreach($cou as $cou){ ?> 
              <div class="col-md-6">
                <img src=".<?php echo $cou['image'];?>" width="400" class="img img-circle"><br><br>
                <input class="form-control" name="foto" id="foto" type="file"><br> 
              </div>
              <div class="col-md-6">
                 <input name="id" hidden value="<?php echo $cou['id'];?>" >
                 <label>Titulo</label> 
                 <input class="form-control" id="" name="cou_name" required value="<?php echo $cou['name'];?>"><br>
                 <label>Descripción</label>
                 <textarea class="form-control" id="" name="cou_description" rows="5" required><?php echo $cou['description'];?></textarea>
                 <center><h2>Audiencia</h2></center>               
                  <div class="col-md-12">               
                      <div class="col-md-4">
                         <center><h3>Niños</h3><br></center><center><button <?php if ($cou['children']=="Si"){echo 'class="btn btn-success">Si';}else{echo 'class="btn btn-danger">No';} ;?></button></center> 
                      </div>
                      <div class="col-md-4">
                         <center><h3>Jóvenes</h3><br></center><center><button <?php if ($cou['young']=="Si"){echo 'class="btn btn-success">Si';}else{echo 'class="btn btn-danger">No';} ;?></button></center> 
                      </div>
                      <div class="col-md-4">
                         <center><h3>Adultos</h3><br></center><center><button <?php if ($cou['adult']=="Si"){echo 'class="btn btn-success">Si';}else{echo 'class="btn btn-danger">No';} ;?></button></center> 
                      </div> 
                      <div class="col-md-12"><br>
                      <a type="button" class="btn btn-warning btn-block" data-toggle="modal"  data-target="#audi" id="btn_new">Editar Audiencia</a> 
                      </div>                  
                  </div>                  
              </div>
            <?php }}  ?>
            </div>
          </div>
            
            <div class="panel-footer">
              <center>
              <button type="submit" class="btn btn-success">Modificar</button>
              <a type="button"class="btn btn-primary " data-toggle="modal" data-dismiss="modal">Cancelar</a>
              </center>
            </div>
          </form> 
        </div>
      </div>
    </div><!--/.row-->
</div>

<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>






