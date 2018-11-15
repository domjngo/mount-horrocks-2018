<?php

function wine_shortcode( $atts )
{
    $a = shortcode_atts(array(
        'image' => '',
        'title' => '',
        'link' => '',
        'first' => false,
        'last' => false
    ), $atts);

    $first = '';
    $last = '';
    if ( $a['first'] ) {
        $first = '<div class="wines">';
    }
    if ( $a['last'] ) {
        $last = '</div>';
    }

    $html = $first . wine_html( $a['image'], $a['title'], $a['link'] ) . $last;

    return $html;
}

function wine_html( $img, $title, $link ) {

    $html = '<div class="wine-item">';
    $html .= '<a href="%s">';
    $html .= '<img src="%s" alt="%s">';
    $html .= '<h3>%s</h3>';
    $html .= '</a>';
    $html .= '</div>';

    return sprintf( $html, $link, $img, $title, $title );
}
