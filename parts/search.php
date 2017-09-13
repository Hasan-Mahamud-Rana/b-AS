<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
 	<input type="submit" class="search-submit show-for-small-only" value="" />
 	<input type="search" 
	       class="search-field" 
	       placeholder="<?php echo esc_attr_x( 'Hvad leder du efter?', 'placeholder' ) ?>" 
	       value="<?php echo get_search_query() ?>" 
	       name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	<span class="clear"></span>
</form>