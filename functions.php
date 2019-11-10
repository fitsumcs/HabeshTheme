<?php
//add css 
function habesha_addcss()
{
  
  wp_enqueue_style('bootstrap' , get_template_directory_uri(  ).'/assest/css/bootstrap.min.css',);


}
//adding navigation 
function habesha_regnavgation()
{
    $nav = array(
      'top-menu'=> __('Top Menu'),
      'bot-menu'=> __('Top Menu')
    ); 
   register_nav_menus( $nav );

  
    
}
add_action('wp_enqueue_scripts', 'habesha_addcss');
add_action('init', 'habesha_regnavgation');
?>