<!--/ Navigation start -->
<div class="site-navigation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Contra menu calling -->
                <?php constra_primary_menus(); ?>
                </nav>
            </div>
            <!--/ Col end -->
        </div>
        <!--/ Row end -->
        <!-- Search file calling -->
        <?php get_template_part( 'inc/template-parts/header/header-search' ); ?>
    </div>
    <!--/ Container end -->
</div>
<!--/ Navigation end -->