<?php
/**
 * @package Nutrition Facts Label Plugin by Global Food Book
 * @version 1.0
 */
/*
Plugin Name: Nutrition Facts Label Plugin
Plugin URI: http://wordpress.org/extend/plugins/nutrition-facts-label/
Description: This plugin is an extract from <a href='http://globalfoodbook.com' target='_blank'>globalfoodbook.com</a>. This plugin generates a nutrition label, providing insight on recipe contents.
Author: Ikenna N. Okpala
Version: 1.0
Author URI: http://ikennaokpala.com/
*/

// Hook for adding admin menus
add_action('admin_menu', 'nutrition_facts_label_pages');

// action function for above hook
function nutrition_facts_label_pages() {
    // Add a new top-level menu:
    add_menu_page(__('Nutrition Label','menu-nutrition-label'), __('Nutrition Label','menu-nutrition-label'), 'manage_options', 'nutrition-label-page', 'nutrition_facts_label' );
}

// nutrition_facts_label() displays the page content for the custom Nutrition Label menu
function nutrition_facts_label() {
    echo "<div class='wrap'>";
    echo "<h2>" . __( 'Nutrition Facts Label', 'menu-nutrition-label' ) . "</h2>";
    echo "</div>";
}?>
