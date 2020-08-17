<!DOCTYPE html>
<html lang="pt-br" >
<body style="background-color:dimgrey;">
<?php get_header(); 	  ?> 
 <?php// get_header('personalizado'); ?> 
 <div class="container"> 

   <div class="row">  
     <div  class="col-md-7 ">  <!--  max size 12  !-->
    		<?php 
			 if(have_posts()): //have posts
			 	echo'<ul class="media-list>';
				while(have_posts()): the_post();
                    
                    $image = ''; //var for the image of posts
                    
                    if(has_post_thumbnail()){  //image thumbnail true
                    
                        $image = sprintf('<div style="color:white" class="media-left"> <a  href="%s">%s</a> </div>',
					    get_the_permalink(),get_the_post_thumbnail($post,'full' )); //full thumbnail // or original size
                    
                    } 
                    
                    $body = sprintf('<div class="media-body" style="color:white"><h3 style="color:white" media-heading><a  href="%s">%s</a></br>%s </div>',
					get_the_permalink(),get_the_title(), get_the_excerpt()); //excerpt = resume //
                   
                    echo("</br>");
                    
                    printf('<li class="media">%s%s</li>', $image, $body); //Post:%s, title:%s, content: %s pode ser mudado por uma template tag  $post->ID $post->post_title  $post->post_content
					
				endwhile;
            
             else: // if there are no bloggers
                echo"</br>";
                echo"</br>";
                echo"</br>";
                echo"</br>";
                echo"<h3><p style='color:white'>Ainda não há posts publicados por este blogueiro. </p> </h3>"; 
        
                endif
			?>
          
	  </div> 
     <div class="col-md-5">  <!-- max size 12  !-->
      <?php
      echo("") ;
      get_sidebar(); 
      ?>
     </div>
	</div>
 </div>

 <?php get_footer(); ?> 
  <?php// get_footer('personalizado');// ?> 	
             </body>
  </html>