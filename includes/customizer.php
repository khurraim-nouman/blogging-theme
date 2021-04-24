<?php 

function wpb_customize_register($wp_customize)
{   

    // Section For Showcase Section (Image With two Text Lines)
    $wp_customize -> add_section('showcase', array(
        'title' => __('Showcase', 'Mughal Blogs'),
        'description' => sprintf(__('Options For Showcase', 'FrontPage')),
        'priority' => 130
    ));

    // Setting and Control For Image
    $wp_customize -> add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory').'/images/showcase.jpg',
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label' => __('Showcase Image', 'Mughal Blogs'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
    )));

    // Setting and Control For First Heading
    $wp_customize -> add_setting('showcase_heading', array(
        'default' => _x('Urban Photography', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('showcase_heading', array(
        'label' => __('Heading', 'Mughal Blogs'),
        'section' => 'showcase',
        
        'priority' => 2
    ));

    // Setting and Control For Sub Heading
    $wp_customize -> add_setting('showcase_subheading', array(
        'default' => _x('Freelance Photography Company', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));
    
    $wp_customize -> add_control('showcase_subheading', array(
        'label' => __('Sub-Heading', 'Mughal Blogs'),
        'section' => 'showcase',
        'priority' => 3
    ));

    
  


    /*
     *  Showcase Begins Here
     *   
     */



    // Section For Showcase Section (Image With two Text Lines)
    $wp_customize -> add_section('shots', array(
        'title' => __('Shots', 'Mughal Blogs'),
        'description' => sprintf(__('Options For Shots', 'FrontPage')),
        'priority' => 120
    ));
 
    
    // Setting and Control For Main Heading 
    $wp_customize -> add_setting('shots_heading', array(
        'default' => _x('Hello ! We Are Finch Studio', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('shots_heading', array(
        'label' => __('Heading', 'Mughal Blogs'),
        'section' => 'shots',
        'priority' => 2
    ));

    // Setting and Control For Paragraph 
    $wp_customize -> add_setting('shots_paragraph', array(
        'default' => _x('We are digital photography studio specializing in landscape, adverborial and conceptual photography, based in New York. We Love To Turn Ideas Into Beautiful Things.', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('shots_paragraph', array(
        'label' => __('Paragraph', 'Mughal Blogs'),
        'section' => 'shots',
        'priority' => 2
    ));    
    
    // Setting and Control For Sub Heading 
    $wp_customize -> add_setting('shots_subheading', array(
        'default' => _x('Our Awesome Shots', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control('shots_subheading', array(
        'label' => __('Subheading', 'Mughal Blogs'),
        'section' => 'shots',
        'priority' => 2
    )); 



    /*
     *
     *  Footer Section Begins Here
     *   
     * 
     */



    // Section For Footer
    $wp_customize -> add_section('footer', array(
        'title' => __('Footer', 'Mughal Blogs'),
        'description' => sprintf(__('Settings For Footer', 'FrontPage')),
        'priority' => 120
    ));

    // Setting and Control Main Heading 
    $wp_customize -> add_setting('footer_heading', array(
        'default' => _x('- GET IN TOUCH WITH US -', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));
    
    $wp_customize -> add_control('footer_heading', array(
        'label' => __('Heading', 'Mughal Blogs'),
        'section' => 'footer',
        'priority' => 2
    ));
    
    
    // Setting and Control Paragraph
    $wp_customize -> add_setting('footer_paragraph', array(
        'default' => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at mattis magna. Sed nec fermentum neque, non tempor magna. Quisque non ante non ex maximus tempus vitae in nunc. Integer nec felis in ex sollicitudin viverra a et augue.', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));
    
    $wp_customize -> add_control('footer_paragraph', array(
        'label' => __('Paragraph', 'Mughal Blogs'),
        'section' => 'footer',
        'priority' => 2
    ));

    // Setting and Control Address
    $wp_customize -> add_setting('footer_address', array(
        'default' => _x('Moonshine St. 14-05 Light City / T. +00 (123) 456 78 90', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));
    
    $wp_customize -> add_control('footer_address', array(
        'label' => __('Address', 'Mughal Blogs'),
        'section' => 'footer',
        'priority' => 2
    ));

    // Setting and Control CopyRight Line
    $wp_customize -> add_setting('footer_copyright', array(
        'default' => _x('© 2014 Zonya. All rights reserved. Theme by elemis.', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));
    
    $wp_customize -> add_control('footer_copyright', array(
        'label' => __('Copyright Line', 'Mughal Blogs'),
        'section' => 'footer',
        'priority' => 2
    ));


    // Setting and Control Pinterest Link
    $wp_customize -> add_setting('footer_pinterest', array(
        'default' => _x('#', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));
    
    $wp_customize -> add_control('footer_pinterest', array(
        'label' => __('Pinterest Link', 'Mughal Blogs'),
        'section' => 'footer',
        'priority' => 2
    ));

    // Setting and Control Facebook Link
    $wp_customize -> add_setting('footer_facebook', array(
        'default' => _x('#', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));
    
    $wp_customize -> add_control('footer_facebook', array(
        'label' => __('Facebook Link', 'Mughal Blogs'),
        'section' => 'footer',
        'priority' => 2
    ));

    // Setting and Control Twitter Link
    $wp_customize -> add_setting('footer_twitter', array(
        'default' => _x('#', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));
    
    $wp_customize -> add_control('footer_twitter', array(
        'label' => __('Twitter Link', 'Mughal Blogs'),
        'section' => 'footer',
        'priority' => 2
    ));

    // Setting and Control Instagram Link
    $wp_customize -> add_setting('footer_instagram', array(
        'default' => _x('#', 'Mughal Blogs'),
        'type' => 'theme_mod'
    ));
    
    $wp_customize -> add_control('footer_instagram', array(
        'label' => __('Instagram Link', 'Mughal Blogs'),
        'section' => 'footer',
        'priority' => 2
    ));



    /*
     *
     *      NAVBAR HEADER SECTION 
     * 
     */

         // Section For Showcase Section (Image With two Text Lines)
    $wp_customize -> add_section('navbar', array(
        'title' => __('Navbar', 'Mughal Blogs'),
        'description' => sprintf(__('Options For Navbar', 'FrontPage')),
        'priority' => 130
    ));

    // Setting and Control For Image
    $wp_customize -> add_setting('header_image', array(
        'default' => get_bloginfo('template_directory').'/images/site-logo.png',
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'header_image', array(
        'label' => __('Header Image', 'Mughal Blogs'),
        'section' => 'navbar',
        'settings' => 'header_image',
        'priority' => 1
    )));

    // Setting and Control For Navbar Image
    $wp_customize -> add_setting('navbar_image', array(
        'default' => get_bloginfo('template_directory').'/images/site-logo.png',
        'type' => 'theme_mod'
    ));

    $wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 'navbar_image', array(
        'label' => __('Navbar Image', 'Mughal Blogs'),
        'section' => 'navbar',
        'settings' => 'navbar_image',
        'priority' => 1
    )));
}

add_action('customize_register', 'wpb_customize_register');



