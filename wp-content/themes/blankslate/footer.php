<?php get_sidebar(); ?>
</div>
<footer id="footer" role="contentinfo">
<div class="container">
    <h2>Have a word!</h2>
    <p>Keen to get in touch and discuss content?</p>
    <p><a class="button" href="/contact">Contact Shogun <span class="tou-node" id="tou-0.0-42fc58dd-496c-4b75-9db0-b8967e423e86" lang="fr"></span></a></p>
</div>
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
<script>
    (function ($) {
        "use strict";
        $(document).ready(function () {
            $('.patreon-text-over-button a')text("Shogun Ash's Patreon");
        
        });
    }(jQuery));
</script>
</html>