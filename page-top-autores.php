<?php get_header();?>
<div class="container" style="background-color:dimgrey;">
 <h1   style="color:white" style="background-color:dimgrey;"><?php single_post_title(); ?></h1>
    <div class="row">
        <div class="col-md-9" style="background-color:dimgrey;">
           <?php 
           if(have_posts()): the_post();
                the_post_thumbnail('medium');
                echo"<p  style='color:white'>   ";
                 echo do_shortcode( '[topblogueiros]' ); 
                echo"</p>";
           endif;
           ?>
        </div>
        <div class="col-md-3" style="background-color:dimgrey;">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
 
<?php get_footer();  ?>  