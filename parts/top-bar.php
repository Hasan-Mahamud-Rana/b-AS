<div class="row menu show-for-medium-up tt">
      <div class="contain-to-grid sticky">
        <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
          <section class="top-bar-section">
            <div class="medium-3 large-3 logo columns"><a class="logo" href="<?php echo home_url(); ?>"> </a></div>
            <div class="medium-9 large-9 nvr columns">
            <ul class="sBar"><li class="has-dropdown"><a class="searchIcon"></a></li></ul>
              <?php bordingweb_top_bar_l(); ?>
              <?php if(function_exists('ubermenu')): ?>
                <?php ubermenu( 'main' , array( 'theme_location' => 'top-bar-r' ) ); ?>
              <?php else: ?>
                 <?php bordingweb_top_bar_r(); ?>
              <?php endif; ?>     
            </div>
            <!--div class="medium-1 large-2 lang columns">
              <?php //get_template_part( 'parts/language-switcher' ); ?>
            </div-->
          </section>
        </nav>
      </div>
</div>