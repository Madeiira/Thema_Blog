<!DOCTYPE html>
<html lang="pt-br" >
<body style="background-color:black;">
<?php get_header(); 	  ?> 
 <?php// get_header('personalizado'); ?> 
 <div class="container"> 
 <h2>       	 </h2>
   <div class="row">  
     <div class="col-md-6">   <!-- max size 12  !-->
    		<?php 
			 
			 if(have_posts()):
			 
				echo'<ul class="media-list>';
				
				while(have_posts()): the_post();
			
					$image = '';  //var for the image of posts
				
					if(has_post_thumbnail()){ //image thumbnail true
				
						$image = sprintf('<div class="media-left"> <a href="%s">%s</a> </div>',
						get_the_permalink(),get_the_post_thumbnail($post,'full' ));
					} 
				
					$body = sprintf('<div class="media-body"><h3 media-heading style="color:white"><a href="%s">%s</a> </div>',
					get_the_permalink(),get_the_title());
				
					echo("</br>");
				
					printf('<li class="media">%s%s</li>', $image, $body); //Post:%s, title:%s, content: %s pode ser mudado por uma template tag  $post->ID $post->post_title  $post->post_content
					
				endwhile;
				
				else:
			
				echo"<p style='color:white;' >Ainda não tem posts</p>";
		
			endif
			
			?>
           
	  </div>
     <div class="col-md-6">  <!-- max size 12  !-->
      <?php get_sidebar(); ?>
     </div>
	</div>
 </div>

 <?php get_footer(); ?> 
  <?php// get_footer('personalizado');// ?> 	
				</body>
				</html>