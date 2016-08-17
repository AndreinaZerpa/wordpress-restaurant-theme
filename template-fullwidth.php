<?php
/*
template name:Full-width

*/
 get_header(); ?>





<section class="main container">

    <?php if( have_posts() ) : while ( have_posts() ) : the_post();  ?>


      <article class="post clearfix">

     <a href="<?php the_permalink();?>">
      <?php if (has_post_thumbnail() ) { the_post_thumbnail( 'list_article_thumbs'); }?>
     </a>


      <?php the_content();?>


      </article>

    <?php endwhile; else: ?>
    <h2>no articles</h2>
    <?php endif; ?>

</section>
<?php get_footer(); ?>
