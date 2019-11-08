<h1><?php the_title( );?></h1>
<?php "Author : ".the_author(). "|".the_category()."|".the_tags(); ?>
<p><?php the_content();?></p>
<p><?php next_post_link()?></p>
<p><?php previous_post_link()?></p>
