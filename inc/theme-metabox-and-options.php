<?php

require get_template_directory() . '/inc/cs-framework/cs-framework.php';

function industry_rrfoline_theme_metabox($options) {
    $options = array();
    
    $options[] = array(
        'id' => 'industry_rrfonline_slide_meta',
        'title' => 'Slide options',
        'context' => 'normal',
        'priority' => 'default',
        'post_type' => 'industry-slide',
        'sections' => array(
            array(
                'name' => 'industry_rrfonline_slide_metabox',
                'fields' => array(
                    array(
                        'id' => 'width',
                        'type' => 'select',
                        'title' => 'Slide text width',
                        'options' => array(
                            'col-md-4' => '4 Columns',
                            'col-md-5' => '5 Columns',
                            'col-md-6' => '6 Columns',
                            'col-md-7' => '7 Columns',
                            'col-md-8' => '8 Columns',
                            'col-md-9' => '9 Columns',
                            'col-md-10' => '10 Columns',
                            'col-md-11' => '11 Columns',
                            'col-md-12' => '12 Columns',
                        ),
                        'default' => 'col-md-6',
                    ),
                    array(
                        'id' => 'offset',
                        'type' => 'select',
                        'title' => 'Slide text offset',
                        'options' => array(
                            'no-offset' => 'No Offset',
                            'col-md-offset-1' => '1 Column',
                            'col-md-offset-2' => '2 Columns',
                            'col-md-offset-3' => '3 Columns',
                            'col-md-offset-4' => '4 Columns',
                            'col-md-offset-5' => '5 Columns',
                            'col-md-offset-6' => '6 Columns',
                            'col-md-offset-7' => '7 Columns',
                            'col-md-offset-8' => '8 Columns',
                        ),
                        'default' => 'no-offset',
                    ),
                    array(
                        'id' => 'align',
                        'type' => 'select',
                        'title' => 'Slide text align',
                        'options' => array(
                            'left' => 'Left',
                            'center' => 'Center',
                            'right' => 'Right',
                        ),
                        'default' => 'left',
                    ),
                    array(
                        'id' => 'text_color',
                        'type' => 'color_picker',
                        'title' => 'Slide text color',
                        'default' => '#333',
                    ),                   
                    array(
                        'id' => 'enable_overlay',
                        'type' => 'switcher',
                        'title' => 'Enable overlay?',
                        'default' => false,
                    ),                  
                    array(
                        'id' => 'overlay_color',
                        'type' => 'color_picker',
                        'title' => 'Overlay color',
                        'default' => '#333',
                        'dependency' => array( 'enable_overlay', '==', true),
                    ),                  
                    array(
                        'id' => 'overlay_opacity',
                        'type' => 'number',
                        'title' => 'Overlay opacity',
                        'desc' => 'Type a number for overlay opacity. 1 - 100. (Number only)',
                        'default' => 70,
                        'dependency' => array( 'enable_overlay', '==', true),
                    )
                )
            )
        )
    );  
    
    $options[] = array(
        'id' => 'industry_rrfonline_page_meta',
        'title' => 'Page options',
        'context' => 'normal',
        'priority' => 'default',
        'post_type' => 'page',
        'sections' => array(
            array(
                'name' => 'industry_rrfonline_page_metabox',
                'fields' => array(
                    array(
                        'id' => 'header_style',
                        'type' => 'select',
                        'title' => 'Header Style',
                        'options' => array(
                            '1' => 'Header 1',
                            '2' => 'Header 2',
                        ),
                        'default' => '1',
                    ),
                    array(
                        'id' => 'enable_title',
                        'type' => 'switcher',
                        'title' => 'Enable Page Title?',
                        'default' => 'true',
                    ),
                    array(
                        'id' => 'custom_title',
                        'type' => 'textarea',
                        'title' => 'Add page Custom Title',
                        'dependency' => array( 'enable_title', '==', true),
                    ),
                    array(
                        'id' => 'title_text_direction',
                        'type' => 'select',
                        'title' => 'Title text align',
                        'options' => array(
                            'left' => 'Left',
                            'center' => 'Center',
                            'right' => 'Right',
                        ),
                        'default' => 'left',
                        'dependency' => array( 'enable_title', '==', true),
                    ),
                )
            )
        )
    );
    
    
    
    return $options;
}
add_filter('cs_metabox_options', 'industry_rrfoline_theme_metabox');


function industry_rrfoline_theme_options( $options ) {

    $options        = array();

    $options[]      = array(
        'name'      => 'header_options',
        'title'     => 'Header Settings',
        'icon'      => 'fa fa-home',
        'fields'    => array(
            array(
                'id'        => 'logo_text',
                'type'      => 'text',
                'title'     => 'Logo Text',
                'default'     => 'industry',
            ),
            array(
                'id'                => 'header_1_links',
                'type'              => 'group',
                'title'             => 'Header 1 links',
                'button_title'       => 'Add new',
                'accordion_title'   => 'Add new link',
                'fields'            => array(
                    array(
                        'id'        => 'text',
                        'type'      => 'text',
                        'title'     => 'Text',
                    ),
                    array(
                        'id'        => 'link',
                        'type'      => 'text',
                        'title'     => 'Link',
                    ),
                    array(
                        'id'        => 'bg_color',
                        'type'      => 'color_picker',
                        'default'   => '#45be24',
                        'title'     => 'Background Color',
                    ),
                    array(
                        'id'        => 'text_color',
                        'type'      => 'color_picker',
                        'default'   => '#ffffff',
                        'title'     => 'Text Color',
                    ),
                    array(
                        'id'        => 'tab',
                        'type'      => 'select',
                        'title'     => 'Link open in',
                        'options'    => array(
                            '_self'     =>'Same tab',
                            '_blank'     =>'New tab',
                        ),
                    ),
                )
            ),
        )
    );

    $options[]      = array(
        'name'      => 'typography',
        'title'     => 'Typography',
        'icon'      => 'fa fa-heart',
        'fields'    => array(
            array(
                'id'    => 'body_font',
                'type'  => 'typography',
                'title'    => 'Body font',
                'default'    => array(
                    'family' => 'Montserrat',
                ),
            )
        )
    );

    return $options;

}

add_filter('cs_framework_options', 'industry_rrfoline_theme_options');
