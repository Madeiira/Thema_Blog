 

<?php get_header();?>
        <div class="container">
                <h1><?php single_post_title();?></h1>
                        <div class="row">
                                 <div class="col-md-9">
<?php
                if(have_posts()): 
                        the_post();
                        the_post_thumbnail('full');
                        the_content();

                        echo"<h3> Autor:";
                        $id = get_the_id();
                        $termos = wp_get_post_terms($id,'publicadores');

                                foreach ($termos as $termo) {
                                        $link=get_term_link($termo);
                                        echo"<a href='$link'>".$termo->name."</a>.</h3> ";
                                        echo'<h6>Data de postagem: '; the_field('ano_de_postagem');
                                        echo' / Tema: '; the_field('tema');
                                        echo"</h6>";
                                        echo'<br />';
                                }
                
                endif;
                ?>
                                 </div>
                         <div class="col-md-3">
                <?php get_sidebar(); ?>
         </div>
                
 
<?php get_footer(); ?>

