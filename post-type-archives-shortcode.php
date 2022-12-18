/**
 * Post Type Archives Shortcode
 */
function post_type_archives_shortcode() {
    ob_start(); ?>
    <select class="archive-dropdown" name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
    <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
    <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1, 'post_type' => 'post_type_name' ) ); ?>
    </select>
    <?php return ob_get_clean();
}
add_shortcode('post-type-archives', 'post_type_archives_shortcode');
