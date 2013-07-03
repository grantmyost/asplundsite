<header class="banner navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a href="#"><img class="social-media-icon" alt="Twitter Icon" src="/assets/twitter-icon.png"></a>
      <a href="#"><img class="social-media-icon" alt="Facebook Icon" src="/assets/facebook-icon.png"></a>
      <a href="#"><img class="social-media-icon" alt="Linked In Icon" src="/assets/linked-in-icon.png"></a>
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      
      <nav class="nav-main nav-collapse collapse navbar-inverse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'after' => "</li><li class='divider-vertical'>"));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
