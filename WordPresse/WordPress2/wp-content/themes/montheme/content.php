<div class="blog-post">
    
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
            previous_post_link("<-- %link","%title",true,"","category");
            next_post_link(" %link -->","%title",true,"","category");
        }else{
            the_post_thumbnail('medium');
            the_excerpt();
            ?>
            <a href="<?php the_permalink()?>"><button>Lire la suite</button></a>
            <?php
        }?>
    
</div><!-- /.blog-post -->