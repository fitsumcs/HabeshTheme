<?php 
get_header( );

if (have_posts( )): 
    while(have_posts( )): 
        the_post( );
        get_template_part( 'Template-Parts/content', 'post' );

    endwhile;
endif;
get_footer( );
?>