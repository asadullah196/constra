<!-- Search starts -->
<div class="nav-search">
    <span id="search"><i class="fa fa-search"></i></span>
</div><!-- Search block end -->



<div class="search-block" style="display: none;">
    <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
        <label for="search-field" class="w-100 mb-0">
            <input type="text" name="s" class="form-control" id="search-field" placeholder="<?php echo esc_attr__('Type what you want and enter', 'constra'); ?>" value="<?php echo get_search_query(); ?>">
        </label>
        <span class="search-close">&times;</span>
    </form>
</div>

<!-- Ssearch site end -->

<?php /*

<div class="search-block" style="display: none;">
    <form action="/" method="get">
        <label for="search search-field" class="w-100 mb-0">
            <input type="text" name="s" class="form-control" id="search search-field" placeholder="Type what you want and enter" value="<?php the_search_query(); ?>">
        </label>
        <span class="search-close">&times;</span>
    </form>
</div>


 <!-- navigation drop search bar -->
 <div class="search" id="search-bar">
    <form role="search" class="search-form d-flex nav-search" action="/" method="get">
        <input type="text" name="s" placeholder="Enter your text" id="search" value="<?php the_search_query(); ?>">
        <button class="btn-hover1 search-submit" type="submit">Search</button>
    </form>
    <button id="remove-btn">
        <i class="fa-solid fa-square-xmark"></i>
    </button>
</div>


<form action="/" method="get">
	<label for="search">Search in <?php echo home_url( '/' ); ?></label>
	<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
	<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
</form>

*/