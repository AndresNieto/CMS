<?php 
function home_action(){
require "vistas/login.php";
}
function login_action(){
	$login=login();
require "vistas/login.php";
}
function user_action(){
	$user=consult_user();
require "vistas/user.php";
}
function enter_publication_action(){
	$pub=consult_publication();		
require "vistas/enter_publication.php";
}
function enter_galery_action(){
	$alb=consult_album();
	$alb1=consult_album();		
require "vistas/enter_galery.php";
}

function enter_slider_action(){
	$sli=consult_slider();		
require "vistas/enter_slider.php";
}
function view_slider_action(){
	$sli=view_slider();
require "vistas/update_slider.php";
}

function enter_course_action(){
	$course=consult_course();
require "vistas/enter_course.php";
}
function view_publication_action(){
	$publ=view_publication();
require "vistas/update_publication.php";
}
function update_publication_action(){
	$pub=consult_publication();
require "vistas/enter_publication.php";
}
function update_company_action(){
	$comp=consult_company();
require "vistas/update_company.php";
}
function view_user_action(){
	$user=view_user();
require "vistas/update_user.php";
}
function testimonial_action(){
	$test=consult_testimonial();
require "vistas/testimonial.php";
}
function view_testimonial_action(){
	$test=view_testimonial();
require "vistas/update_testimonial.php";
}
function view_course_action(){
	$cou=view_course();
require "vistas/update_course.php";
}






function enter_publication_model(){
create_publication();
}
function enter_album_model(){
create_album();
}
function enter_image_model(){
create_image();
}
function view_publication_model(){
view_publication();
}
function update_publication_model(){
update_publication();
}
function update_slider_model(){
update_slider();
}
function delete_publication_model(){
delete_publication();
}
function delete_slider_model(){
delete_slider();
}
function delete_album_model(){
delete_album();
}
function update_company_model(){
update_company();
}
function enter_user_model(){
create_user();
}
function update_user_model(){
update_user();
}
function delete_user_model(){
delete_user();
}

function enter_testimonial_model(){
create_testimonial();
}
function update_testimonial_model(){
updatetestimonialr();
}
function delete_testimonial_model(){
delete_testimonial();
}

function enter_course_model(){
create_course();
}
function update_course_model(){
update_course();
}
function update_audience_model(){
update_audience();
}
function delete_course_model(){
delete_course();
}


 
?>