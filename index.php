<?php
    require_once "modelo/modelo.php";
    require_once "controlador/controlador.php";

    if(isset($_SERVER['REQUEST_URI'])){
      $uri = $_SERVER['REQUEST_URI'];
    }

    //Vistas
    
    if($uri=="/CMS/index.php/home"){
     home_action();
    } 

    if($uri=="/CMS/index.php/usuarios"){
     user_action();   
    } 

    if($uri=="/CMS/index.php/publicaciones"){
     enter_publication_action();   
    }    

    if($uri=="/CMS/index.php/suempresa"){
     update_company_action();   
    }  

    if($uri=="/CMS/index.php/cursos"){
     enter_course_action();   
    }  

    if($uri=="/CMS/index.php/testimonios"){
     testimonial_action();   
    }  

    if($uri=="/CMS/index.php/verusuario"){
     view_user_action();
    }   

    if($uri=="/CMS/index.php/verpublicacion"){
     view_publication_action();
    } 

    if($uri=="/CMS/index.php/vertestimonio"){
     view_testimonial_action();
    } 

    if($uri=="/CMS/index.php/vercurso"){
     view_course_action();
    } 

    //Success

    if($uri=="/CMS/index.php/home?enter_publication=succes"){
      enter_publication_action();
    }

    if($uri=="/CMS/index.php/home?update_publication=succes"){
      enter_publication_action();
    }

    if($uri=="/CMS/index.php/home?delete_publication=succes"){
      enter_publication_action();
    }

    if($uri=="/CMS/index.php/login_model"){
     login_action();
    }

    //Publication

    if($uri=="/CMS/index.php/enter_publication_model"){
     enter_publication_model();
    }

    if($uri=="/CMS/index.php/view_publication_model"){
     view_publication_model();         
    }

    if($uri=="/CMS/index.php/update_publication_model"){
     update_publication_model();         
    }

    if($uri=="/CMS/index.php/delete_publication_model"){
     delete_publication_model();         
    }

    //Company

    if($uri=="/CMS/index.php/update_company_model"){
     update_company_model();         
    }

    //User

    if($uri=="/CMS/index.php/enter_user_model"){
     enter_user_model();
    }

    if($uri=="/CMS/index.php/update_user_model"){
     update_user_model();         
    }

    if($uri=="/CMS/index.php/delete_user_model"){
     delete_user_model();         
    }

    //Testimonial

    if($uri=="/CMS/index.php/enter_testimonial_model"){
     enter_testimonial_model();
    }

    if($uri=="/CMS/index.php/view_testimonial_model"){
     view_testimonial_model();         
    }

    if($uri=="/CMS/index.php/update_testimonial_model"){
     update_testimonial_model();         
    }

    if($uri=="/CMS/index.php/delete_testimonial_model"){
     delete_testimonial_model();         
    }

    //Course

    if($uri=="/CMS/index.php/enter_course_model"){
     enter_course_model();
    }

    if($uri=="/CMS/index.php/view_course_model"){
     view_course_model();         
    }

    if($uri=="/CMS/index.php/update_course_model"){
     update_course_model();         
    }

    if($uri=="/CMS/index.php/update_audience_model"){
     update_audience_model();         
    }

    if($uri=="/CMS/index.php/delete_course_model"){
     delete_course_model();         
    }
    
    ?>