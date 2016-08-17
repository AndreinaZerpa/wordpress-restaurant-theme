
<footer class="container-fluid">
<div class="container">
    <section  class="widget">

         <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : endif; ?>
    </section>
</footer>


<script src="<?php bloginfo('template_url')?>/js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="<?php bloginfo('template_url')?>/js/bootstrap.min.js"></script>

<script src="<?php bloginfo('template_url')?>/js/classie.js"></script>
  <script src="<?php bloginfo('template_url')?>/js/boxesFx.js"></script>
  <script>
    new BoxesFx( document.getElementById( 'boxgallery' ) );
  </script>
  <?php wp_footer();?>
</body>
</html>
