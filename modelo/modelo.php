<?php
function conectar_base_de_datos (){
    $conexion=mysqli_connect("localhost","root","","cms");
    if(!$conexion){
        echo 'No se pudo conectar con la jodida BD';
    }
    return $conexion;
}
function cerrar_conexion_db($conexion){
    mysqli_close($conexion);
}
function login(){
    if($_SERVER['REQUEST_METHOD']=="POST"){  
    $username=$_POST['user']; 
    $pass=$_POST['password'];
    if ($pass==NULL || $username==NULL) {
    echo '<div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>La clave no fue Digitada!</strong> 
            </div>';
    }
        else{
            $conexion=conectar_base_de_datos();
            $consulta="SELECT user,password FROM usuario WHERE user='$username'";
            $resultado= mysqli_query($conexion,$consulta);
            echo mysqli_error($conexion);
            while ($row = mysqli_fetch_row($resultado)){
                $User=$row[0];
                $Password=$row[1];            
            }
            if($Password==$pass){
                //session_start();
                //$_SESSION['name']=$User;
                //$_SESSION['tipo']=$Tipo;
                echo '<script>sessionStorage.setItem("Nombre","AndresNieto");sessionStorage.setItem("Contraseña","anieto95");
                    </script>';
                header('Location: /CMS/index.php/publicaciones');
            }
            else {
                 echo '<script>alert("Clave incorrecta, digítela nuevamente");</script>;';
                 header('Location: /CMS/index.php/home');
            }
        }
    }
}
function consult_user(){
        $conexion=conectar_base_de_datos();
        $consulta="SELECT * FROM usuario";
        $resultado=mysqli_query($conexion,$consulta);
        $user=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $user[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $user;
}

function consult_publication(){
        $conexion=conectar_base_de_datos();
        $consulta="SELECT * FROM publicacion LIMIT 0,50";
        $resultado=mysqli_query($conexion,$consulta);
        $pub=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $pub[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $pub ;
}
function consult_body_publication(){
        $conexion=conectar_base_de_datos();
        $consulta="SELECT body FROM publicacion LIMIT 0,50";
        $resultado=mysqli_query($conexion,$consulta);
        $pub1=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $pub1[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $pub1;
}

function consult_company(){
        $conexion=conectar_base_de_datos();
        $consulta="SELECT * FROM empresa";        
        $resultado=mysqli_query($conexion,$consulta);
        $comp=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $comp[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $comp;
}

function consult_testimonial(){
        $conexion=conectar_base_de_datos();
        $consulta="SELECT * FROM testimonios";
        $resultado=mysqli_query($conexion,$consulta);
        $test=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $test[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $test;
}

function consult_course(){
        $conexion=conectar_base_de_datos();
        $consulta="SELECT * FROM course";
        $resultado=mysqli_query($conexion,$consulta);
        $course=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $course[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $course;
}

function view_publication(){
        $conexion=conectar_base_de_datos();
        $id = $_POST['id'];
        $consulta="SELECT id, title, body, image FROM publicacion where id='$id'";
        $resultado=mysqli_query($conexion,$consulta);
        $publ=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $publ[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $publ;
}


function create_publication(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
        $conexion=conectar_base_de_datos();
        $titulo_de_publicacion= $_POST['pub_tittle'];
        $contenido_de_publicacion= $_POST['pub_content'];

        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES['foto']['tmp_name'];echo $ruta;
        $destino="./../site/images/noticias/".$foto;
        move_uploaded_file($ruta, $destino);
        
        $consulta = "INSERT INTO publicacion VALUES('','$titulo_de_publicacion','$contenido_de_publicacion','$destino','$foto')";
        mysqli_query($conexion, $consulta);

        define('ROOT', __DIR__);
        $nombre_archivo = ROOT."..\vistas\prueba.php"; 
        if(file_exists($nombre_archivo)){
            $mensaje = "El Archivo $nombre_archivo se ha modificado";
        }
     
        else   {
            $mensaje = "El Archivo $nombre_archivo se ha creado";
        }

        if($archivo = fopen($nombre_archivo, "a"))
        {
            if(fwrite($archivo, date("d m Y H:m:s"). " ". $mensaje. "\n"))
            {
                echo "Se ha ejecutado correctamente";
            }
            else
            {
                echo "Ha habido un problema al crear el archivo";
            }
     
            fclose($archivo);
        }




        cerrar_conexion_db($conexion);       
    }

   //header("Location: /CMS/index.php/home?enter_publication=succes");

}

function create_course(){
        if($_SERVER['REQUEST_METHOD']=="POST"){
        $conexion=conectar_base_de_datos();
        $nombre_curso= $_POST['cou_name'];
        $descripcion_curso= $_POST['cou_description'];
        $tipo_curso=$_POST['cou_type'];
        if (isset($_POST['children'])) {$niños_curso="Si";}  else{$niños_curso="No";}
        if (isset($_POST['young'])) {$jovenes_curso="Si";}  else{$jovenes_curso="No";}
        if (isset($_POST['adult'])) {$adultos_curso="Si";}  else{$adultos_curso="No";}
       
        $foto=$_FILES["foto"]["name"];
        $ruta=$_FILES['foto']['tmp_name'];
        $destino="./img/cursos/".$foto;
        move_uploaded_file($ruta, $destino);
        
        $consulta = "INSERT INTO course VALUES('','$nombre_curso','$descripcion_curso','$niños_curso','$jovenes_curso','$adultos_curso','$tipo_curso','$destino')";
        $resultado=mysqli_query($conexion, $consulta);
        cerrar_conexion_db($conexion);   echo $resultado;    
    }

   header("Location: /CMS/index.php/cursos");

}

function create_testimonial(){
        if($_SERVER['REQUEST_METHOD']=="POST"){;
        $conexion=conectar_base_de_datos();

        $nombre_tetimonio= $_POST['test_name'];
        $email_testimonio= $_POST['test_email'];
        $content_testimonio= $_POST['test_content'];      
        
        $consulta = "INSERT INTO testimonios VALUES('','$nombre_tetimonio','$email_testimonio','$content_testimonio')";
        mysqli_query($conexion, $consulta);
        cerrar_conexion_db($conexion);       
    }

   header("Location: /CMS/index.php/testimonios");

}

function view_testimonial(){
        $conexion=conectar_base_de_datos();
        $id = $_POST['id'];
        $consulta="SELECT * FROM testimonios where id='$id'";
        $resultado=mysqli_query($conexion,$consulta);
        $test=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $test[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $test;
}

function view_course(){
        $conexion=conectar_base_de_datos();
        $id = $_POST['id'];
        $consulta="SELECT * FROM course where id='$id'";
        $resultado=mysqli_query($conexion,$consulta);
        $cou=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $cou[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $cou;
}

function update_testimonial(){        
        $conexion=conectar_base_de_datos();
        $id = $_POST['id'];
        $nombre_tetimonio= $_POST['test_name'];
        $email_testimonio= $_POST['test_email'];
        $content_testimonio= $_POST['test_content'];  

        $consulta="UPDATE testimonios SET name='$nombre_tetimonio', email='$email_testimonio', content='$content_testimonio' WHERE id='$id'";
        $resultado=mysqli_query($conexion,$consulta);  echo $resultado;      
        cerrar_conexion_db($conexion);
    
       header("Location: /CMS/index.php/testimonios");
        
}

function delete_testimonial(){        
        $conexion=conectar_base_de_datos();
        $id = $_POST['id'];  
        $consulta="DELETE FROM testimonios WHERE id='$id'";
        $resultado=mysqli_query($conexion,$consulta);  echo $resultado;      
        cerrar_conexion_db($conexion);
    
       header("Location: /CMS/index.php/testimonios");
        
}

function create_user(){
        if($_SERVER['REQUEST_METHOD']=="POST"){;
        $conexion=conectar_base_de_datos();

        $nombre_usuario= $_POST['user_name'];
        $contraseña_usuario= $_POST['user_password'];
        $tipo_usuario= $_POST['user_type'];      
        
        $consulta = "INSERT INTO usuario VALUES('','$nombre_usuario','$contraseña_usuario','$tipo_usuario')";
        mysqli_query($conexion, $consulta);
        cerrar_conexion_db($conexion);       
    }

   header("Location: /CMS/index.php/usuarios");

}

function view_user(){
        $conexion=conectar_base_de_datos();
        $id = $_POST['id'];
        $consulta="SELECT * FROM usuario where id='$id'";
        $resultado=mysqli_query($conexion,$consulta);
        $user=array();
        while($fila=mysqli_fetch_assoc($resultado)){
            $user[]=$fila;
        }
        cerrar_conexion_db($conexion);
        return $user;
}

function update_user(){        
        $conexion=conectar_base_de_datos();
        $id = $_POST['id'];
        $nombre_usuario= $_POST['user_name'];
        $contraseña_usuario= $_POST['user_password'];
        $tipo_usuario= $_POST['user_type'];      

        $consulta="UPDATE usuario SET user=' $nombre_usuario', password='$contraseña_usuario', type_user='$tipo_usuario'WHERE id='$id'";
        $resultado=mysqli_query($conexion,$consulta);  echo $resultado;      
        cerrar_conexion_db($conexion);
    
       header("Location: /CMS/index.php/usuarios");
        
}

function delete_user(){        
        $conexion=conectar_base_de_datos();
        $id = $_POST['id'];  
        $consulta="DELETE FROM usuario WHERE id='$id'";
        $resultado=mysqli_query($conexion,$consulta);  echo $resultado;      
        cerrar_conexion_db($conexion);
    
       header("Location: /CMS/index.php/usuarios");
        
}

function update_company(){        
        $conexion=conectar_base_de_datos();
        $id = $_POST['id'];
        $nombre_de_la_empresa= $_POST['comp_name'];
        $email_de_la_empresa= $_POST['comp_email'];
        $telefono_de_la_empresa= $_POST['comp_telephone'];
        $direccion_de_la_empresa= $_POST['comp_address'];
        $consulta="UPDATE empresa SET name='$nombre_de_la_empresa', email='$email_de_la_empresa',telephone='$telefono_de_la_empresa', address='$direccion_de_la_empresa' WHERE id='$id'";
        $resultado=mysqli_query($conexion,$consulta);  echo $resultado;      
        cerrar_conexion_db($conexion);
    
       header("Location: /CMS/index.php/suempresa");
        
}
function update_publication(){        
        $conexion=conectar_base_de_datos();
        $id = $_POST['id'];
        $titulo_de_publicacion= $_POST['pub_tittle'];
        $contenido_de_publicacion= $_POST['pub_content'];

        $foto= $_FILES["foto"]["name"];
        $ruta= $_FILES["foto"]["tmp_name"];
        $destino="./img/blog/".$foto;
        move_uploaded_file($ruta, $destino);

        $consulta="UPDATE publicacion SET title='$titulo_de_publicacion', body='$contenido_de_publicacion',image='$destino' WHERE id='$id'";
        $resultado=mysqli_query($conexion,$consulta);  echo $resultado;      
        cerrar_conexion_db($conexion);
    
        header("Location: /CMS/index.php/home?update_publication=succes");
        
}
function delete_publication(){        
        $conexion=conectar_base_de_datos();
        $id = $_POST['id'];  
        $consulta="DELETE FROM publicacion WHERE id='$id'";
        $resultado=mysqli_query($conexion,$consulta);  echo $resultado;      
        cerrar_conexion_db($conexion);
    
       header("Location: /CMS/index.php/home?delete_publication=succes");
        
}

function update_course(){        
        $conexion=conectar_base_de_datos();
        $id = $_POST['id'];
        $nombre_curso= $_POST['cou_name'];
        $descripcion_curso= $_POST['cou_description'];
        $foto= $_FILES["foto"]["name"];
        $ruta= $_FILES["foto"]["tmp_name"];

        if ($foto=!null) {                   
        $destino="./img/cursos/".$foto;
        move_uploaded_file($ruta, $destino);
        $consulta1="UPDATE course SET image='$destino' WHERE id='$id'";
        $resultado=mysqli_query($conexion,$consulta1);echo $resultado;  
        }       

        $consulta="UPDATE course SET name='$nombre_curso', description='$descripcion_curso'WHERE id='$id'";
        $resultado=mysqli_query($conexion,$consulta);      
        cerrar_conexion_db($conexion);
    
        header("Location: /CMS/index.php/cursos");
        
}
function update_audience(){        
        $conexion=conectar_base_de_datos();
        $id = $_POST['id_audience']; 
        if (isset($_POST['children'])) {$niños_curso="Si";}  else{$niños_curso="No";}
        if (isset($_POST['young'])) {$jovenes_curso="Si";}  else{$jovenes_curso="No";}
        if (isset($_POST['adult'])) {$adultos_curso="Si";}  else{$adultos_curso="No";}echo $adultos_curso;

        $consulta="UPDATE course SET children='$niños_curso', young='$jovenes_curso', adult='$adultos_curso' WHERE id='$id'";
        $resultado=mysqli_query($conexion,$consulta);      
        cerrar_conexion_db($conexion);
    
        //header("Location: /CMS/index.php/cursos");
        
}

?>