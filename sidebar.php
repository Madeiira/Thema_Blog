<ul class="list-group">
    <?php
        $publicadores = get_terms('publicadores');
        foreach($publicadores as $publicador):
            
            $link = get_term_link($publicador);
            printf('<li class="list-group-item"><a href="%s" title="%s"> %s </a></li>',$link,sprintf("Ver Post de %s",$publicador->name),$publicador->name);
        endforeach;
    ?> 
</ul>

