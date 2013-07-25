
<header class="top" role="banner">

  <div class="navbar-inner banner navbar navbar-static-top">
    <div class="container">
      <nav class="nav-main nav-collapse collapse" role="navigation">
      <a class="brand" href="<?php echo home_url(); ?>/">
        <img src="<?php bloginfo('template_directory'); ?>/assets/img/chalmers_pr_prit.png" alt="PRIT Chalmers PR-förening" title="P.R.I.T. 2013 - PR-Förening Informationsteknik Chalmers" /> <h1>P.R.I.T.</h1>
      </a><?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
