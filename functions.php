<?php
register_nav_menus( array(
'menu' => 'Menu superior' ,

));





add_theme_support( 'post-thumbnails' );
add_image_size( 'slider_thumbs' ,1920, 1274, true );
add_image_size( 'list_article_thumbs' ,339,300, true );
add_image_size( 'list_article_thumbs' ,700,378, true );
wp_get_attachment_image_sizes('list_article_thumbs' ,339,300, true );

register_sidebar(array(
'name' => 'Sidebar',
'before_widget' => '<aside class="widget">',
'after_widget' => '</aside>',
'before_title'  =>  '<h4>',
'after_title'  =>  '</h4>',
));


register_sidebar(array(
'name' => 'Footer',
'before_widget' => '<aside class="widget">',
'after_widget' => '</aside>',
'before_title'  =>  '<h4>',
'after_title'  =>  '</h4>',
));
?>

<?php

 function breadcrumbs(){
    $sep = " &gt; ";
    $home_breadcrumb     = '<a href="'.get_bloginfo('url').'" title="'.esc_attr(__('Go to main page','theme')).'">'."Inicio".'</a>';
    $search_breadcrumb   = '';
    $single_breadcrumbs  = '';
    $cat_breadcrumbs     = '';

    if (is_search()){
       $search_breadcrumb .= $sep.'<span>'.__('Search on site','theme').'</span>';
       $search_breadcrumb .= $sep.'<span>'.get_query_var('s').'</span>';
    }elseif (is_home() || is_front_page()){
       // nada más
    }elseif (is_singular()){
       global $post;
       $post_ancestors = get_post_ancestors($post);
       if ($post_ancestors) {
          $post_ancestors = array_reverse($post_ancestors);
          $post_ancestors[] = $post;
          foreach ($post_ancestors as $p){
             $single_breadcrumbs .= $sep.'<a href="'.get_permalink($p).'" title="'.esc_attr(sprintf(__('Go to page %s','theme'),get_the_title($p))).'">'.get_the_title($p).'</a>';
          }
       }
       if (is_single() && has_category()){
          $post_cats = wp_get_post_categories($post->ID);
          if (!empty($_SESSION['last_cat']) && in_array($_SESSION['last_cat'],$post_cats)){
             $cat_id = $_SESSION['last_cat'];
          }else{
             $cat_id = is_array($post_cats) && count($post_cats) ? $post_cats[0] : false;
          }
       }
    }

    if (is_category()){
       $cat_id = (int)get_query_var('cat');
       $_SESSION['last_cat'] = $cat_id;
    }

    while ($cat_id){
       $cat = get_category($cat_id);
       $cat_breadcrumbs = $sep.'<a href="'.esc_url(get_category_link($cat_id)).'">'.$cat->name.'</a>'
                         .$cat_breadcrumbs;
       if ($cat->parent){
          $cat_id = (int)$cat->parent;
       }else{
          $cat_id = false;
       }
    }

    return $home_breadcrumb.$cat_breadcrumbs.$single_breadcrumbs.$search_breadcrumb;
 }


 ?>


 <?php
        function pagination($prev = '«', $next = '»') {
            global $wp_query, $wp_rewrite;
            $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
            $pagination = array(
                'base' => @add_query_arg('paged','%#%'),
                'format' => '',
                'total' => $wp_query->max_num_pages,
                'current' => $current,
                'prev_text' => __($prev),
                'next_text' => __($next),
                'type' => 'plain'
        );
            if( $wp_rewrite->using_permalinks() )
                $pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
            if( !empty($wp_query->query_vars['s']) )
                $pagination['add_args'] = array( 's' => get_query_var( 's' ) );
            echo paginate_links( $pagination );
        };
        ?>
