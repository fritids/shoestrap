<?php

/*
 * The typography core options for the Shoestrap theme
 */
if ( !function_exists( 'shoestrap_module_typography_options' ) ) {
  function shoestrap_module_typography_options($sections) {

    // Typography Options
    $section = array(
    		'title' => __("Typography", "shoestrap"),
    		'icon' => SOF_OPTIONS_URL.'img/glyphicons/glyphicons_105_text_height.png',
    	);

    $fields[] = array(
      "name"      => __("Base Font", "shoestrap"),
      "desc"      => __("The main font for your site.", "shoestrap"),
      "id"        => "font_base",
      'compiler'      => true,
      "std"       => array(
        'family'    => 'Arial, Helvetica, sans-serif',
        'size'    => '14px',
        'google'  => 'false',
        'weight'  => 'inherit',
        'color'   => '#333333',
      ),
      "preview"   => array(
        "text"    => __( "This is my preview text!", "shoestrap" ), //this is the text from preview box
        "size"    => "30px" //this is the text size from preview box
      ),
      "type"      => "typography",
    );

    $fields[] = array(
      "name"      => __("Header Overrides", "shoestrap"),
      "desc"      => __("By enabling this you can specify custom values for each <h*> tag. Default: Off", "shoestrap"),
      "id"        => "font_heading_custom",
      "std"       => 0,
      "compiler"      => true,
      "type"      => "switch",
      "customizer"=> array(),
      "fold"      => "advanced_toggle"
    );

    $fields[] = array(
      "name"      => __("H1 Font", "shoestrap"),
      "desc"      => __("The main font for your site.", "shoestrap"),
      "id"        => "font_h1",
      'compiler'  => true,
      "std"       => array(
        'family'  => 'Arial, Helvetica, sans-serif',
        'size'    => '38px',
        'color'   => '#333333',
        'google'  => 'false'
      ),
      "preview"   => array(
        "text"    => __( "This is my preview text!", "shoestrap" ), //this is the text from preview box
        "size"    => "30px" //this is the text size from preview box
      ),
      "type"      => "typography",
      "fold"      => "font_heading_custom",
    );

    $fields['font_h2'] = array(
      "name"      => __("H2 Font", "shoestrap"),
      "desc"      => __("The main font for your site.", "shoestrap"),
      'compiler'  => true,
      "std"       => array(
        'family'  => 'Arial, Helvetica, sans-serif',
        'size'    => '32px',
        'color'   => '#333333',
        'google'  => 'false'
      ),
      "preview"   => array(
        "text"    => __( "This is my preview text!", "shoestrap" ), //this is the text from preview box
        "size"    => "30px" //this is the text size from preview box
      ),
      "type"      => "typography",
      "fold"      => "font_heading_custom",
    );

    $fields['font_h3'] = array(
      "name"      => __("H3 Font", "shoestrap"),
      "desc"      => __("The main font for your site.", "shoestrap"),
      'compiler'  => true,
      "std"       => array(
        'family'  => 'Arial, Helvetica, sans-serif',
        'size'    => '24px',
        'color'   => '#333333',
        'google'  => 'false'
      ),
      "preview"   => array(
        "text"    => __( "This is my preview text!", "shoestrap" ), //this is the text from preview box
        "size"    => "30px" //this is the text size from preview box
      ),
      "type"      => "typography",
      "fold"      => "font_heading_custom",
    );

    $fields[] = array(
      "name"      => __("H4 Font", "shoestrap"),
      "desc"      => __("The main font for your site.", "shoestrap"),
      "id"        => "font_h4",
      'compiler'  => true,
      "std"       => array(
        'family'  => 'Arial, Helvetica, sans-serif',
        'size'    => '18px',
        'color'   => '#333333',
        'google'  => 'false'
      ),
      "preview"   => array(
        "text"    => __( "This is my preview text!", "shoestrap" ), //this is the text from preview box
        "size"    => "30px" //this is the text size from preview box
      ),
      "type"      => "typography",
      "fold"      => "font_heading_custom",
    );

    $fields[] = array(
      "name"      => __("H5 Font", "shoestrap"),
      "desc"      => __("The main font for your site.", "shoestrap"),
      "id"        => "font_h5",
      'compiler'  => true,
      "std"       => array(
        'family'  => 'Arial, Helvetica, sans-serif',
        'size'    => '16px',
        'color'   => '#333333',
        'google'  => 'false'
      ),
      "preview"   => array(
        "text"    => __( "This is my preview text!", "shoestrap" ), //this is the text from preview box
        "size"    => "30px" //this is the text size from preview box
      ),
      "type"      => "typography",
      "fold"      => "font_heading_custom",
    );

    $fields[] = array(
      "name"      => __("H6 Font", "shoestrap"),
      "desc"      => __("The main font for your site.", "shoestrap"),
      "id"        => "font_h6",
      'compiler'      => true,
      "std"       => array(
        'family'    => 'Arial, Helvetica, sans-serif',
        'size'    => '12px',
        'color'   => '#333333',
        'google'  => 'false'
      ),
      "preview"   => array(
        "text"    => __( "This is my preview text!", "shoestrap" ), //this is the text from preview box
        "size"    => "30px" //this is the text size from preview box
      ),
      "type"      => "typography",
      "fold"      => "font_heading_custom",
    );

    $section['fields'] = $fields;

    do_action( 'shoestrap_module_typography_options_modifier' );
    
    array_push($sections, $section);
    return $sections;

  }
}
add_action( 'shoestrap_add_sections', 'shoestrap_module_typography_options', 80 ); 

include_once( dirname(__FILE__).'/functions.typography.php' );