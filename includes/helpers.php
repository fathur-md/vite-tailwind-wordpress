<?php

function get_img_by_slug($slug, $size = 'full', $class = '')
{
    $args = get_post(array(
        'post_type'     => 'attachment',
        'name'          => $slug,
        'post_per_page' => 1,
        'post_status'   => 'inherit',
    ));

    if (empty($images)) {
        return "";
    }

    return wp_get_attachment_image($images[0]->ID, $size, false, array(
        'class' => $class,
    ));
}

function get_img_url($id, $size = 'full')
{
    $url = wp_get_attachment_image_url((int) $id, $size);
    return $url ? esc_url($url) : '';
}

function get_img_tag($id, $size = 'full', $class = '')
{
    $id = (int) $id;
    if (! $id) return '';

    // prefer alt meta, fallback ke title
    $alt = get_post_meta($id, '_wp_attachment_image_alt', true);
    if (empty($alt)) {
        $post = get_post($id);
        $alt = $post ? $post->post_title : '';
    }

    return wp_get_attachment_image($id, $size, false, [
        'class' => $class,
        'alt'   => $alt ? esc_attr($alt) : '',
    ]);
}
