<?php 
function university_files(){
    wp_enqueue_style('univeristy_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'university_files');
//first argument has to have the exact name 
//second argument has to have the same name of the function above => no parenthesis!!!!!!

?>
