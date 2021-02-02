<div class="blog-post">
    <?php the_post_thumbnail('medium'); ?>
    <h2 class="blog-post-title">
        <?php the_title(); ?>
    </h2>
    <p class="blog-post-meta">
        <?php the_date(); ?> par <a href="#">
            <?php the_author(); ?>
        </a>
    </p>
    <?php 
        if(is_single()){
            the_content();
            if(get_previous_post()!=null){
                previous_post_link();
            }  
            if(get_next_post()!=null){
                next_post_link();
            }
        }else{
            the_excerpt();
            ?>
            <a href="<?php the_permalink()?>"><button>Lire la suite</button></a>
            <?php
        }?>
    
</div><!-- /.blog-post -->