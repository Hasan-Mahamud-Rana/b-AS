<div class="off-canvas-wrap" data-offcanvas>
<div class="inner-wrap">
<nav class="tab-bar">
  <section class="left-small"> <a class="left-off-canvas-toggle menu-icon" ><span></span></a> </section>
  <section class="middle tab-bar-section">
    <div class="small-8 mobile-logo columns">
      <h1 class="title"><a class="logo" href="<?php echo home_url(); ?>"> </a> </h1>
    </div>
    <div class="small-4 columns show-for-medium-up">
      <?php get_template_part( 'parts/search' ); ?>
    </div>
    <!--div class="small-3 mobile-lang columns">
      <?php //get_template_part( 'parts/language-switcher' ); ?>
    </div-->
  </section>
</nav>
<aside class="left-off-canvas-menu">
  <?php bordingweb_mobile_off_canvas(); ?>
</aside>