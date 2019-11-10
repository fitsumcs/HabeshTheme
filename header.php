<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title><?php bloginfo( 'name' )?></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <?php wp_head();?>
</head>
<body>
    <a href="<?php echo home_url();?>"><h1><?php bloginfo( 'name' ) ?></h1></a>
    <h2><?php bloginfo( 'description' ) ?></h2>
<?php if(is_front_page()): get_search_form( ); endif?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
  <div class="collapse navbar-collapse" id="navbarNav">
     
  <?php 
        
        $topnav = array(
            'theme_location' => 'top-menu',
            'menu_id'        => 'primary-menu',
            'container'      => false,
            'depth'          => 2,
            'menu_class'     => 'nav',

        );
        wp_nav_menu( $topnav);
        
        ?>

      
  </div>
</nav>







    
    
   
   
    


    
