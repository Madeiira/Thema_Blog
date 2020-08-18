<ul class="list-group">
    <?php
        
        echo"<h3 style='color:white;'  >Blogueiros:</h3>"; //Adição da sidebar para mostrar todos os blogueiros
        
        $publicadores = get_terms('publicadores');
        foreach($publicadores as $publicador):
            
            $link = get_term_link($publicador);
            echo'<p  >';
            printf('<li  class="list-group-item"><a href="%s" title="%s"> %s </a></li>',$link,sprintf("Ver Post de %s",$publicador->name),$publicador->name);
            echo'</p>';
        endforeach;
        get_search_form();
    ?> 
</ul>

