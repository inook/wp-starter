<?php 
    
    function theme_customize_register( $wp_customize ) {


    // REMOVE SECTION
    $wp_customize->remove_section('static_front_page');


    //  ANALYTICS 
    //  =============================
    $wp_customize->add_section(
    'theme_analytics',
    array(
        'title'     => 'Analytics',
        'priority'  => 202
        )
    );

        //  SOCIAL Facebook
        //  =============================
        $wp_customize->add_setting(
            'analytics_id',
            array(
                'default'   => '',
            )
        );

        $wp_customize->add_control(
            'analytics_id',
            array(
                'label'         => 'ID Google Analytics',
                'section'       => 'theme_analytics',
                'type'          => 'text',
                'description'   => 'UA-XXXXXX-XX'
            )
        );


    //  SOCIAL Section
    //  =============================
    $wp_customize->add_section(
    'theme_social',
    array(
        'title'     => 'Réseaux sociaux',
        'priority'  => 201
        )
    );

        //  SOCIAL Facebook
        //  =============================
        $wp_customize->add_setting(
            'social_facebook',
            array(
                'default'       => '',
            )
        );

        $wp_customize->add_control(
            'social_facebook',
            array(
                'label'         => 'Facebook url',
                'section'       => 'theme_social',
                'type'          => 'text',
            )
        );

        //  SOCIAL Twitter
        //  =============================
        $wp_customize->add_setting(
            'social_twitter',
            array(
                'default'       => '',
            )
        );

        $wp_customize->add_control(
            'social_twitter',
            array(
                'label'         => 'Twitter url',
                'section'       => 'theme_social',
                'type'          => 'text',
            )
        );

        //  SOCIAL Instagram
        //  =============================
        $wp_customize->add_setting(
            'social_instagram',
            array(
                'default'       => '',
            )
        );

        $wp_customize->add_control(
            'social_instagram',
            array(
                'label'         => 'Instagram url',
                'section'       => 'theme_social',
                'type'          => 'text',
            )
        );

        //  SOCIAL Linkedin
        //  =============================
        $wp_customize->add_setting(
            'social_linkedin',
            array(
                'default'       => '',
            )
        );

        $wp_customize->add_control(
            'social_linkedin',
            array(
                'label'         => 'Linkedin url',
                'section'       => 'theme_social',
                'type'          => 'text',
            )
        );

        //  SOCIAL Google+
        //  =============================
        $wp_customize->add_setting(
            'social_googleplus',
            array(
                'default'       => '',
            )
        );

        $wp_customize->add_control(
            'social_googleplus',
            array(
                'label'         => 'Google+ url',
                'section'       => 'theme_social',
                'type'          => 'text',
            )
        );

        //  SOCIAL youtube
        //  =============================
        $wp_customize->add_setting(
            'social_youtube',
            array(
                'default'       => '',
            )
        );

        $wp_customize->add_control(
            'social_youtube',
            array(
                'label'         => 'Youtube url',
                'section'       => 'theme_social',
                'type'          => 'text',
            )
        );



}

add_action( 'customize_register', 'theme_customize_register' );

?>