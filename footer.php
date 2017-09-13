  <?php do_action('installation_point'); ?>
<div class="promo" style="display: none;">
<?php get_sidebar( 'footertop' ); ?>
<?php get_sidebar( 'footermenu' ); ?>
</div>
<?php get_sidebar( 'footerlocation' ); ?>
</section>
<a class="exit-off-canvas"></a> </div>
</div>
<script>
jQuery(document).foundation();
</script>
<?php if ( is_front_page() || is_page_template( 'blog.php' ) || is_single()) { ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.6/jquery.mousewheel.min.js"></script>
<script src="http://malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/homepage.js"></script>
<?php } ?>
<?php if ( is_front_page() || is_page_template( 'blog.php' )|| is_page_template( 'omos.php' )) { ?>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.5/slick.min.js"></script>
<?php } ?>
<?php if ( is_page_template( 'omos.php' )) { ?>
<script type="text/javascript">
	jQuery('div.infograf .row') .slick({
		infinite: false,
		slidesToShow: 5,
		slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
		});
</script>
<?php } ?>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/custom.js"></script>
<script type="text/javascript">
//Smooth Anchor link
  $(function() {
  $('a[href*="#"]').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return true;
      }
    }
  });
});
</script>
</body>
</html>