<?php
/** Load the School theme styles on the website. */
function school_custom_enqueue_styles() {
    wp_enqueue_style(
        'school-custom-normalize',
        get_theme_file_uri( 'assets/css/normalize.css' ),
        array(),
        '8.0.1'
    );
    wp_enqueue_style(
        'school-custom-style',
        get_stylesheet_uri(),
        array( 'school-custom-normalize' ),
        filemtime( get_theme_file_path( 'style.css' ) )
    );
    wp_enqueue_style(
        'school-custom-responsive',
        get_theme_file_uri( 'assets/css/responsive.css' ),
        array( 'school-custom-style' ),
        filemtime( get_theme_file_path( 'assets/css/responsive.css' ) )
    );
}
add_action( 'wp_enqueue_scripts', 'school_custom_enqueue_styles' );

/** Use the same styles inside the block editor. */
function school_custom_editor_styles() {
    add_editor_style( array(
        'assets/css/normalize.css',
        'style.css',
        'assets/css/responsive.css',
    ) );
}
add_action( 'after_setup_theme', 'school_custom_editor_styles' );

/* Give new students fixed layout */
function school_student_editor_template()
{
	$student = get_post_type_object('student');

	if (!$student) {
		return;
	}

	$student->template = array(
		array(
			'core/paragraph',
			array(
				'placeholder' => 'Write the student biography here.',
			),
		),
		array(
			'core/buttons',
			array(),
			array(
				array(
					'core/button',
					array(
						'text' => 'See My Portfolio',
						'backgroundColor' => 'primary',
						'textColor' => 'base',
					),
				),
			),
		),
	);

	// Temporarily unlocked while building student content.
	$student->template_lock = false;
}
add_action('init', 'school_student_editor_template', 20);

/* Image Sizes */
function school_student_image_sizes() {
    add_image_size( 'student-portrait', 320, 480, true );
    add_image_size( 'student-portrait-large', 480, 720, true );
}
add_action( 'after_setup_theme', 'school_student_image_sizes' );

/* Add portrait sizes available in the editor's image-size menu. */
function school_student_image_size_names( $sizes ) {
    $sizes['student-portrait'] = __( 'Student Portrait (320 × 480)', 'school-custom' );
    $sizes['student-portrait-large'] = __( 'Student Portrait Large (480 × 720)', 'school-custom' );
    return $sizes;
}
add_filter( 'image_size_names_choose', 'school_student_image_size_names' );
