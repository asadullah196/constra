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