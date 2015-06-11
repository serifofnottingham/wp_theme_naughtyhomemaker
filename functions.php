function recipe( $atts, $content = null ) {
    return '<div class="recipe">"'.$content.'"</div>';
}
add_shortcode("recipe", "recipe");