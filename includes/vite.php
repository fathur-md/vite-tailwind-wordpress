<?php

function vite_is_dev()
{
    return file_exists(get_template_directory() . '/.hot');
}

function vite_assets()
{
    if (vite_is_dev()) {
        $vite_server = trim(file_get_contents(get_template_directory() . '/.hot'));

        echo '<script type="module" src="' . $vite_server . '/@vite/client"></script>';
        echo '<script type="module" src="' . $vite_server . '/assets/js/app.js"></script>';
    } else {
        $manifest = json_decode(file_get_contents(get_template_directory() . '/dist/.vite/manifest.json'), true);

        $theme_uri = get_template_directory_uri();

        $js = $manifest['assets/js/app.js'];

        echo '<script type="module" src="' . $theme_uri . '/dist/' . $js['file'] . '"></script>';

        if (!empty($js['css'])) {
            foreach ($js['css'] as $css) {
                echo '<link rel="stylesheet" href="' . $theme_uri . '/dist/' . $css . '">';
            }
        }

        // if (isset($js['css'])) {
        //     foreach ($js['css'] as $css) {
        //         echo '<link rel="stylesheet" href="' . get_template_directory_uri() . '/dist/' . $css . '">';
        //     }
        // }
    }
}
