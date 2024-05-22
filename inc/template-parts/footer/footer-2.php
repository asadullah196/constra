    <!-- Footer starts -->
    <footer id="footer" class="footer bg-overlay">
        <?php if(is_active_sidebar('footer-1') or is_active_sidebar('footer-2') or is_active_sidebar('footer-3') ) : ?>
        <div class="footer-main">
            <div class="container">
                <div class="row justify-content-between">
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer main end -->
        <?php endif; ?>
        <!-- Calling copyright content -->
        <?php get_template_part( 'inc/template-parts/footer/copyright' ); ?>
    </footer><!-- Footer end -->
</div><!-- Body inner end -->