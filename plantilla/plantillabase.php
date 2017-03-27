<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SamyCMS</title>
    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../bower_components/switch/bootstrap-switch.css">
   
    <script src="../tinymce /tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
   


   

</head>

<body>

    <div id="wrapper" >

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color: #000">
            <div class="navbar-header" >
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color: #fff">SamyCMS</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right"  >
               
               
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"  style="color: #fff"></i><span id="user" style="color: #fff">Usuario</span><i class="fa fa-caret-down"  style="color: #fff; padding:4px"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuracion</a>
                        </li>
                        <li class="divider"></li>
                        <li id="logout"><a href="/CMS/index.php/home"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="/CMS/index.php/usuarios"><i class="fa fa-bar-chart-o fa-fw"></i>Usuarios<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="/CMS/index.php/publicaciones"><i class="fa fa-bar-chart-o fa-fw"></i>Publicaciones<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="/CMS/index.php/suempresa"><i class="fa fa-bar-chart-o fa-fw"></i> Su empresa<span class="fa arrow"></span></a>
                             
                        </li>
                        <li>
                            <a href="/CMS/index.php/cursos"><i class="fa fa-bar-chart-o fa-fw"></i> Cursos<span class="fa arrow"></span></a>
                            
                        </li>
                        <li>
                            <a href="/CMS/index.php/testimonios"><i class="fa fa-bar-chart-o fa-fw"></i> Testimonios<span class="fa arrow"></span></a>
                            
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <?php 
        if(isset($_GET['update_company'])){
            if($_GET['update_company']=="succes"){
        
              echo '<div id="page-wrapper">
                        <div class="alert alert-success">
                        <strong>Perfecto!</strong> Ingresado correctamente.
                    </div></div>';
          }}
             ?>
               <?php 
        if(isset($_GET['enter_publication'])){
            if($_GET['enter_publication']=="succes"){
                    echo '<div class="col-md-3"></div>
                        <div class="col-md-8"><br>
                        <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Perfecto!</strong> Operación realizada con éxito.
                        </div></div>';
          }}


             ?>


       <?php 
        echo $contenido;
       ?>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>
    <script src="../js/ckeditor.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script>
    /*Funcion de Capturar, Almacenar datos y Limpiar campos*/
    $(document).ready(function(){  
    var nombre = sessionStorage.getItem("Nombre");
    var password = sessionStorage.getItem("Contraseña"); 
     
    if (nombre==null && password==null || nombre=="null" && password=="null") {
        console.log("asd");
        window.location.href="/CMS/index.php/home"
    }
    else{document.getElementById("user").innerHTML = nombre;  }     
    
    });

    </script>
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="../bower_components/switch/bootstrap-switch.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
    <script type="text/javascript">
        $("#logout").click(function(){
            sessionStorage.setItem("Nombre", null);
            sessionStorage.setItem("Contraseña", null);
        })
    </script>
    <script type="text/javascript">
      $("[name='children']").bootstrapSwitch();
      $("[name='young']").bootstrapSwitch();
      $("[name='adult']").bootstrapSwitch();
    </script>
</body>

</html>
