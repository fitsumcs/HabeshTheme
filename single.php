<?php 
get_header( );

if (have_posts( )): 
    while(have_posts( )): 
        the_post( );
        get_template_part( 'Template-Parts/content', 'post' );
         if(comments_open( )):
            comments_template();
         else:
           echo "No Comments ....";
        endif;
    endwhile;
endif;
get_footer( );
?>