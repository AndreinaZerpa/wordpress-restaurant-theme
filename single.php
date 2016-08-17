<?php get_header(); ?>


<section class="jumbotron">
  <div class="container ep"><br><br><br>
    <h2><?php bloginfo('name');?></h2>
  <h2><?php bloginfo('description'); ?></h2>
  </div>
</section>



<section class="main container">
  <div class="row">
    <section class="posts col-md-9">


    <?php if( have_posts() ) : while ( have_posts() ) : the_post();  ?>


      <article class="post clearfix">

     <a href="<?php the_permalink();?>" class="thumb pull-left">
      <?php if (has_post_thumbnail() ) { the_post_thumbnail( 'list_article_thumbs'); }?>
     </a>
     <h2 class="post-title">
       <a href="<?php the_permalink();?>"><?php the_title();?></a>
     </h2>
     <p><span class="post-fecha"><?php the_date('Y-m-d', '<h2>', '</h2>'); ?></span> <span class="post-category"><?php the_category( ' ' ); ?> </span></p>
     <p class="post-contenido text-justify">
      <?php the_content();?>
     </p>
     
      </article>

    <?php endwhile; else: ?>
    <h2>no articles</h2>
    <?php endif; ?>

   <div class="comentarios">
     <h2>comments</h2>
     <div class="caja_comentarios">
       <?php comments_template(); ?>
     </div>
   </div>

        </section>


<?php get_sidebar(); ?>
</div>
</section>
<?php get_footer(); ?>
