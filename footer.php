</div><!-- main content -->


</div><!-- Wrapper -->


<footer id="footer" class="">
    <div class="column animate__animated footer_animate">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <aside class="widget-area">
            <?php dynamic_sidebar( 'sidebar-1' ); ?>
        </aside><!-- .widget-area -->
        <?php endif; ?>
    </div>

    <div class="column animate__animated footer_animate">
        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
        <aside class="widget-area">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </aside><!-- .widget-area -->
        <?php endif; ?>
    </div>
    <div class="column animate__animated footer_animate">
        <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
        <aside class="widget-area">
            <?php dynamic_sidebar( 'sidebar-3' ); ?>
        </aside><!-- .widget-area -->
        <?php endif; ?>
    </div>
    <div class="column animate__animated footer_animate">
        <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
        <aside class="widget-area">
            <?php dynamic_sidebar( 'sidebar-4' ); ?>
        </aside><!-- .widget-area -->
        <?php endif; ?>
    </div>
    <div class="column animate__animated footer_animate">
        <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
        <aside class="widget-area">
            <?php dynamic_sidebar( 'sidebar-5' ); ?>
        </aside><!-- .widget-area -->
        <?php endif; ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
