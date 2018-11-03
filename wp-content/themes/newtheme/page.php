<?php

get_header();
?>

<?php
if(have_posts()){
    while(have_posts())
    {
        the_post
        ();
        ?>
       <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
       <p>
       <?php the_content();?>
       </p>
        <?php 
    }
} 
?>
<?php 
get_footer();
?>
