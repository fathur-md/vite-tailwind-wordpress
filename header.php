<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php vite_assets(); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class('font-sans antialiased flex flex-col selection:text-accent-2 selection:bg-none'); ?>>
    <?php wp_body_open(); ?>

    <?php
    // Default
    // get_template_part('template-parts/header/navbar');

    // Custom
    get_template_part('template-parts/header/navbar-custom');
    ?>