<?php
defined('ABSPATH') || exit;

// Basic Settings //

// header logo 
Redux::setSection($opt_name, array(
    'title'            => __('Header Section', 'uomo'),
    'id'               => 'header-section-logo',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'header-logo',
            'type'    => 'media',
            'title' => __('Website Header Logo', 'uomo'),
            'subtitle' => __('Upload Your Header Website Logo', 'uomo'),
            'default' => array(
                'url' => get_template_directory_uri() . '/images/logo.png',
            )
        ),
    )
));


// footer logo 
Redux::setSection($opt_name, array(
    'title'            => __('Footer Section', 'uomo'),
    'id'               => 'footer-section-logo',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'footer-logo',
            'type'    => 'media',
            'title' => __('Website Footer Logo', 'uomo'),
            'subtitle' => __('Upload Your Footer Website Logo', 'uomo'),
            'default' => array(
                'url' => get_template_directory_uri() . '/images/logo.png',
            )
        ),
    )
));




// footer content left section
Redux::setSection($opt_name, array(
    'title'            => __('Footer Content Section', 'uomo'),
    'id'               => 'footer-content-section',
    'icon'             => 'fa fa-cog',
    'fields'           => array(
        array(
            'id' => 'footer-left-address',
            'type' => 'text',
            'title' => __('Address', 'uomo'),
            'default' => '1418 River Drive, Suite 35 Cottonhall, CA 9622 United States',
        ),

        array(
            'id' => 'footer-left-email',
            'type' => 'text',
            'title' => __('Email', 'uomo'),
            'default' => 'sale@uomo.com',
        ),

        array(
            'id' => 'footer-left-phone',
            'type' => 'text',
            'title' => __('Phone', 'uomo'),
            'default' => '+1 246-345-0695',
        ),

        array(
            'id' => 'footer-facebook-url',
            'type' => 'text',
            'title' => __('Faccebook Url', 'uomo'),
            'default' => 'https://www.facebook.com/',
        ),

        array(
            'id' => 'footer-twitter-url',
            'type' => 'text',
            'title' => __('Twitter Url', 'uomo'),
            'default' => 'https://twitter.com/',
        ),

        array(
            'id' => 'footer-instagram-url',
            'type' => 'text',
            'title' => __('Instagram Url', 'uomo'),
            'default' => 'https://www.instagram.com/',
        ),

        array(
            'id' => 'footer-youtube-url',
            'type' => 'text',
            'title' => __('YouTube Url', 'uomo'),
            'default' => 'https://www.youtube.com/',
        ),

        array(
            'id' => 'footer-pinterest-url',
            'type' => 'text',
            'title' => __('Pinterest Url', 'uomo'),
            'default' => 'https://www.pinterest.com/',
        ),
    )
));


// footer content right section
Redux::setSection($opt_name, array(
    'title'            => __('Footer Section Right', 'uomo'),
    'id'               => 'footer-content-section-right',
    'icon'             => 'fa fa-cog',
    'fields'           => array(

        array(
            'id' => 'footer-left-title',
            'type' => 'text',
            'title' => __('Payment Title', 'uomo'),
            'default' => 'SUBSCRIBE',
        ),

        array(
            'id' => 'footer-left-desc',
            'type' => 'text',
            'title' => __('Payment Description', 'uomo'),
            'default' => 'Be the first to get the latest news about trends, promotions, and much more!',
        ),

        array(
            'id' => 'footer-payment-title',
            'type' => 'text',
            'title' => __('Payment Method Title', 'uomo'),
            'default' => 'Secure payments',
        ),

        array(
            'id' => 'footer-left-payment-logo',
            'type'    => 'media',
            'title' => __('Footer Payment Logo', 'uomo'),
            'subtitle' => __('Upload Your Footer Payment Logo', 'uomo'),
            'default' => array(
                'url' => get_template_directory_uri() . '/images/payment-options.png',
            )
        ),       
    )
));
