<?php
//function recipe_shortcode( $attr, $content = null ) {
//    return '<div class="recipe">' . $content . '</div>';
//}
//add_shortcode('recipe', 'recipe_shortcode');

// Load Font Awesome
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

}

// Change Category Archives Title
function my_category_title() { return 'Category: '.single_cat_title('', false); }
add_filter('headway_category_title', 'my_category_title');

?>