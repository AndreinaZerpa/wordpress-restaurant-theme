<?php
/*
template name:Full-width-jumbotron

*/
 get_header(); ?>
<div class="container">


</div>

<section class="jumbotron">
  <div class="container ep"><br><br><br>
    <h2><?php bloginfo('name');?></h2>
  <h2><?php bloginfo('description'); ?></h2>
  </div>
</section>




<section class="container-fluid">

    <section>

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
