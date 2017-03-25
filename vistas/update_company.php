<?php ob_start() ?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Acerca de su Empresa           <button class="btn  btn-warning" id="btn_update">Actualizar</button></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
   <?php if(isset($comp)){?>     
   <form action="/CMS/index.php/update_company_model" method="post" id="frm_emp">
   <?php foreach($comp as $comp){ ?> 
       <div class="row">
           <div class="col-md-12">
               <label>Nombre </label>
               <input type="text" class="form-control" id="name" name="comp_name" disabled value="<?php echo $comp['name'];?>">
           </div>
           <div class="col-md-12"><br>
               <label>Correo electrónico</label>
               <input class="form-control" id="email" name="comp_email" disabled value="<?php echo $comp['email'];?>">
           </div>
           <div class="col-md-12"><br>
               <label>Teléfono</label>
               <input class="form-control" id="tel" name="comp_telephone" disabled value="<?php echo $comp['telephone'];?>">
           </div>
           <div class="col-md-12"><br>
               <label>Dirección</label>
               <input class="form-control" id="address" name="comp_address" disabled value="<?php echo $comp['address'];?>">
           </div>
           <div class="col-md-12"><br><br>
              <input value="<?php echo $comp['id'];?>" name="id" hidden>
           		<center><button  class="btn btn-block btn-success" disabled id="btn_ingresar">Ingresar</button></center><br><br>
           </div>
       </div>
   </form> 
   <?php }}  ?>
</div>


<?php $contenido=ob_get_clean(); ?>
<?php include "plantilla/plantillabase.php"; ?>
<script type="text/javascript">
  $("#btn_update").click(function(){
    
    var num = $("#frm_emp .form-control").length;  
    $("#btn_ingresar").prop( "disabled", false);
   
    var datos = "";

    for (var i = 0; i < num; i++) {
      
      var campo = $("#frm_emp .form-control").toArray()[i].id;
      

      $("#"+campo).prop( "disabled", false);
      

    };


  })
</script>