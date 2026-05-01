<?php

require get_template_directory() . '/includes/vite.php';

function fathur_studio_register_menus()
{
    register_nav_menu('primary-menu', 'Menu Utama (Primary)');
}

add_action('after_setup_theme', 'fathur_studio_register_menus');
