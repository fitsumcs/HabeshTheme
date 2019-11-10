<?php
//add css 
function habesha_addcss()
{
  
  wp_enqueue_style('bootstrap' , get_template_directory_uri(  ).'/assest/css/bootstrap.min.css');


}
add_action('wp_enqueue_scripts', 'habesha_addcss');

?>