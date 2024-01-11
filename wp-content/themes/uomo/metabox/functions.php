<?php

// include_once(__DIR__ ."/pages/index-page.php");


// Metabox for taxonomy term (pa_color in this case)

function metabox_uomo_color(array $taxonomy_meta)
{
    $taxonomy_meta[] = array(
        'id'            => 'term-review-position',
        'title'         => 'Extra Section',
        'object_types'  => array('term'), // Specify 'term' here for taxonomy
        'taxonomies'    => array('pa_color'), // Specify your taxonomy name here
        'fields'        => array(  
            array( 
                'id'   => 'color-attribute',
                'name' => 'Select color',
                'desc' => 'Select the color',
                'type' => 'colorpicker',
                'default' => '#ffffff',
            ), 
        )
    );

    return $taxonomy_meta;
}

add_filter('cmb2_meta_boxes', 'metabox_uomo_color');