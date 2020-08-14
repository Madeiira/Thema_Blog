 
<!DOCTYPE html>
<html lang="pt-br" >
<body style="background-color:black;">

<?php get_header();?>
        <div class="container">
                <h1 style='color:white'><?php single_post_title();?></h1> <!--  capturing the title of post !-->
                        <div class="row">
                                 <div class="col-md-9"> <!-- max size 12 !-->
<?php
                if(have_posts()): 
                     
                        the_post(); // show the post
                        the_post_thumbnail('full'); // show the post thumbnail orginal size
                       echo"<div style='color:white'>"; the_content(); // content of the post
                        echo"</div>";
                        echo"<h3 style='color:white;' > Autor:";
                      
                        $id = get_the_id();
                        $termos = wp_get_post_terms($id,'publicadores'); // reference of functions.php taxonomy-hierarchical of publicers

                                foreach ($termos as $termo) { // capturing the max of the posts
                                        $link=get_term_link($termo);
                                        echo"<a href='$link'>".$termo->name."</a>.</h3> ";
                                        echo'<h6 style="color:white;" >Data de postagem: '; the_field('ano_de_postagem');
                                        echo' / Tema: '; the_field('tema');
                                        echo"</h6>";
                                        echo'<br />';
                                }
                
                endif;
                ?>
                                 </div>
                         <div class="col-md-3">  <!-- max size 12 !-->
                <?php get_sidebar(); ?>
         </div>
                
 
<?php get_footer(); ?>

        </body>
        </html>