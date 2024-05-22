<?php

function constra_breadcrumb(){
    global $post;  
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if ( is_front_page() && is_home() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','shofy'));
        $breadcrumb_class = 'home_front_page';
    }
    elseif ( is_front_page() ) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Blog','shofy'));
        $breadcrumb_show = 0;
    }
    elseif ( is_home() ) {
        if ( get_option( 'page_for_posts' ) ) {
            $title = get_the_title( get_option( 'page_for_posts') );
        }
    }
    elseif ( is_single() && 'post' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'service' == get_post_type() ) {
      $title = get_the_title();
    } 
    elseif ( is_single() && 'product' == get_post_type() ) {
        $title = get_theme_mod( 'breadcrumb_product_details', __( 'Shop', 'shofy' ) );
    } 
    elseif ( is_search() ) {
        $title = esc_html__( 'Search Results for : ', 'shofy' ) . get_search_query();
    } 
    elseif ( is_404() ) {
        $title = esc_html__( 'Page not Found', 'shofy' );
    } 
    elseif ( is_archive() ) {
        $title = strip_tags(get_the_archive_title());
    } 
    else {
        $title = get_the_title();
    }
?>

<!-- breadcrumb area start -->
<div class="fintech-breadcrumb">
    <br/><br/><br/><h2 class="text-center news-h2"><?php echo esc_html__($title); ?></h2>
    <P class="text-center news-p"><?php echo esc_html__( get_the_excerpt() ); ?></P>
</div>
<!-- breadcrumb area end -->

<?php
}