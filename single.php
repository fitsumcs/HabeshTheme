<?php 
get_header( );

if (have_posts( )): 
    while(have_posts( )): 
        the_post( );
        get_template_part( 'Template-Parts/content', 'post' );
        comments_template();
    endwhile;
endif;
get_footer( );
?>