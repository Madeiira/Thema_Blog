 <?php get_header();?>
<div class="container">
 <h1  style="color:white"><?php single_post_title(); ?></h1>
    <div class="row">
        <div class="col-md-9">
           <?php 
           if(have_posts()): the_post();
                the_post_thumbnail('medium');
                echo"<p  style='color:white'>";
                the_content();
                echo"</p>";
           endif;
           ?>
        </div>
        <div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
 
<?php get_footer();  ?>  