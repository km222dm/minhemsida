<?php add_action('admin_menu', 'function_name');?>
<?php function new_excerpt_more( $more ) { //installation av excerpt
	    return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( '...Läs mer') . '</a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );?>
<?php add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() { //meny-installation
	register_nav_menu('my_menu', 'Huvudmeny');
}?>
<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
    function alphabet_widgets_init() {
	    register_sidebar( array(
	    	'name'          => 'Home right sidebar',
		    'id'            => 'home_right_1',
	    	'before_widget' => '<div>',
		    'after_widget'  => '</div>',
		    'before_title'  => '<h2 class="rounded">',
		    'after_title'   => '</h2>',
    	) );
    }
add_action( 'widgets_init', 'alphabet_widgets_init' );?>