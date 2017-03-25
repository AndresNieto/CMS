<?php ob_start() ?>

<div id="page-wrapper"> 
    <div class="row">
      <div class="col-lg-12"><br>
      <center><h2>Modificar Usuario</h2></center>    
        <div class="panel panel-success">
          <div class="panel-heading"><div class="row">
            <div class="col-md-6"><center><h2>Digite su Contraseña</h2></center></div>
            <div class="col-md-3"><center><br><input class="form-control" id="pass" type="password"></center></div>
            <div class="col-md-3"><center><br><button class="btn btn-primary" id="btn_verificar">Verificar</button></center></div>
          </div>
            
            
          </div>
          <form action="/CMS/index.php/update_user_model" method="post" id="frm_user">  
          <?php if(isset($user)){?>      
          <div class="panel-body">
                      
            <?php foreach($user as $user){ ?> 
              
              <div class="col-md-12" >
                 <input name="id" value="<?php echo $user['id'];?>" hidden>
                 <label>Nombre de Usuario</label> 
                 <input class="form-control" id="name" name="user_name" required value="<?php echo $user['user'];?>" disabled><br>
                 <label>Contraseña</label> 
                 <input class="form-control" id="password" name="user_password" required value="<?php echo $user['password'];?>" disabled type="password"><br>
                 <label>Tipo de Usuario</label>
                 <select class="form-control" id="type" name="user_type" value="<?php echo $user['type_user'];?>" required disabled>
                   <option>Administrador</option>
                   <option>Contenidos</option>
                 </select>                 
             </div>
            </div>
            <?php }}  ?>
            <div class="panel-footer">
              <center>
              <button type="submit" class="btn btn-success" id="btn_modificar" disabled>Modificar</button>
              <a type="button"class="btn btn-primary " id="btn_cancelar" disabled>Cancelar</a>
              </center>
            </div>
          </form> 
        </div>
      </div>
    </div><!--/.row-->
</div>


<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>

<script type="text/javascript">
  $("#btn_verificar").click(function(){
    var pass=$("#pass").val();
   
    if (pass==sessionStorage.getItem("Contraseña")) {
      var num = $("#frm_user .form-control").length;  
      $("#btn_modificar").prop( "disabled", false);
      $("#btn_cancelar").prop( "disabled", false);    

      for (var i = 0; i < num; i++) {
        
        var campo = $("#frm_user .form-control").toArray()[i].id;
        

        $("#"+campo).prop( "disabled", false);
        

      };

    }
    else{
        alert("Contraseña incorrecta, Digitela de nuevo");
        $("#pass").val("");
      }


  })
</script>
