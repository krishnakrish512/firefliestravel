<?php
add_filter('post_thumbnail_html', 'remove_thumbnail_width_height', 10, 5);

function remove_thumbnail_width_height($html)
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}