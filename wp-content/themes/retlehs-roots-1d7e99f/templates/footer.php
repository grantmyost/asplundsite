<footer class="content-info" role="contentinfo">
  <div class="container">
  	<img id="footer-logo" alt="Asplund logo" src="/assets/Asplund-Group-logo-white_footer.png">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br>All Rights Reserved</p>
  </div>
</footer>

<?php wp_footer(); ?>