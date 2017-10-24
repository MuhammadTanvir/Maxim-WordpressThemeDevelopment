<?php 

/**
 * Get the bootstrap!
 */
if ( file_exists( __DIR__ . '/cmb2/init.php' ) ) {
  require_once __DIR__ . '/cmb2/init.php';
    
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once __DIR__ . '/CMB2/init.php';
}




function maxim_cmb2_field_function(){
    $pre= '_maxim_';
    
    $maxim_slider= new_cmb2_box(array(
    'id' => 'maxim_slider_main',
    'title' => 'Maxim Slider Feild',
    'object_types'=> array('slider'),  
    ));
    

    
$slider_main_id =  $maxim_slider->add_field(array(
    'name' => 'Maxim Slider Group Field',
    'id'   => $pre.'maxim_slider_field',
    'type' => 'group',
    ));
    
    $maxim_slider->add_group_field($slider_main_id,  array(
    'name' => 'Maxim Slider Strong',
    'id'   => $pre.'maxim_slider_strong',
    'type' => 'text',
    ));
    $maxim_slider->add_group_field($slider_main_id,  array(
    'name' => 'Maxim Slider Normal',
    'id'   => $pre.'maxim_slider_normal',
    'type' => 'text',
    ));
    
    
  $maxim_about= new_cmb2_box(array(
    'id' => 'maxim_about_main',
    'title' => 'Maxim about Field',
    'object_types'=> array('about'),  
    ));
    $maxim_about->add_field(array(
    'name' => 'Maxim about Content Title',
    'id'   => $pre.'maxim_about_con_title',
    'type' => 'text',
    ));
    $maxim_about->add_field(array(
    'name' => 'Maxim about Content',
    'id'   => $pre.'maxim_about_con',
    'type' => 'textarea',
    ));
    
 $about_team_id=   $maxim_about->add_field(array(
    'name' => 'Maxim about Team',
    'id'   => $pre.'maxim_about_team_id',
    'type' => 'group',
    ));
    
    $maxim_about->add_group_field( $about_team_id ,array(
    'name' => 'Maxim about Team Image',
    'id'   => $pre.'maxim_about_team_img',
    'type' => 'file',
    ));
    $maxim_about->add_group_field( $about_team_id ,array(
    'name' => 'Maxim about Team Name',
    'id'   => $pre.'maxim_about__team_name',
    'type' => 'text',
    ));
    $maxim_about->add_group_field( $about_team_id ,array(
    'name' => 'Maxim about Team Desg',
    'id'   => $pre.'maxim_about__team_desg',
    'type' => 'text',
    ));
    
    
    
    $maxim_service= new_cmb2_box(array(
    'id' => 'maxim_service_main',
    'title' => 'Maxim Service Field',
    'object_types'=> array('service'),  
    ));
  
    
 $service_team_id=   $maxim_service->add_field(array(
    'name' => 'Maxim Service',
    'id'   => $pre.'maxim_service_id',
    'type' => 'group',
    ));
    
    $maxim_service->add_group_field( $service_team_id ,array(
    'name' => 'Maxim Service Image',
    'id'   => $pre.'maxim_service_img',
    'type' => 'file',
    ));
    $maxim_service->add_group_field( $service_team_id ,array(
    'name' => 'Maxim Service Name',
    'id'   => $pre.'maxim_service_name',
    'type' => 'text',
    ));
    $maxim_service->add_group_field( $service_team_id ,array(
    'name' => 'Maxim Service Description',
    'id'   => $pre.'maxim_service_description',
    'type' => 'textarea',
    ));
  
    
    
}
add_action('cmb2_admin_init', 'maxim_cmb2_field_function');