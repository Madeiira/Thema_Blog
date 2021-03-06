<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo() ?></title>
    
    <?php wp_head()?>
</head>

<body>

<nav class="navbar navbar-default" >
  <div class="container-fluid"> 
    <div class="navbar-header">
    <img src='<?php  echo get_stylesheet_directory_uri()."/assets/images/logo.png";?>' id="logo" class="navbar-brand pull-left"></img>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-exemple-navbar-collapse-1">
      	<span class="sr-only">Toggle navigation </span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
        <span class="icon-bar"> </span>
      </button>
      <a class="navbar-brand" href="<?php bloginfo('url');?>"> <?php echo get_bloginfo('name');?></a>   
     </div>
     
     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
       <ul class="nav navbar-nav">
       <?php
     
     $pages = get_pages(['parent' => 0]);
            foreach ($pages as $p):
                $link = get_page_link($p->ID);
                $childPages = get_pages(['child_of' => $p->ID]);
                if(!count($childPages)) {
                $title = $p->post_title;
                printf('<li class="nav-item"><a class="nav-link" href="%s">%s</a></li>',$link,$title);
                } else {
                  echo'<li class="nav-item dropdown">';
                   printf('<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   %s </a>',$p->post_title);
 
                  echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown">';
                  foreach ($childPages as $child) {
                    $link = get_page_link($child->ID);
                    $title = $child->post_title;
                    printf('<li><a class="dropdown-item" href="%s">%s</a></li>',$link,$title);
                  }
                  echo "</li></ul>";
                }
            endforeach;   
       ?>
       </ul>
     </div>  
  </div>    
</nav>
