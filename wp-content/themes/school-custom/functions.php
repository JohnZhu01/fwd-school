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

/** Load lightGallery styles and scripts only on the front page. */
function school_custom_enqueue_lightgallery() {
    if ( ! is_front_page() ) {
        return;
    }

    wp_enqueue_style(
        'school-custom-lightgallery',
        'https://cdn.jsdelivr.net/npm/lightgallery@2.9.0/css/lightgallery-bundle.min.css',
        array(),
        '2.9.0'
    );

    wp_enqueue_script(
        'school-custom-lightgallery',
        'https://cdn.jsdelivr.net/npm/lightgallery@2.9.0/lightgallery.min.js',
        array(),
        '2.9.0',
        true
    );

    wp_enqueue_script(
        'school-custom-lightgallery-settings',
        get_theme_file_uri( 'assets/js/lightgallery-settings.js' ),
        array( 'school-custom-lightgallery' ),
        filemtime( get_theme_file_path( 'assets/js/lightgallery-settings.js' ) ),
        true
    );
}
add_action( 'wp_enqueue_scripts', 'school_custom_enqueue_lightgallery' );

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

	// Keep the biography and portfolio button in place while allowing content edits.
	$student->template_lock = 'all';
}
add_action('init', 'school_student_editor_template', 20);

/** Give new staff posts two editable starting blocks. */
function school_staff_editor_template() {
    $staff = get_post_type_object( 'staff' );

    if ( ! $staff ) {
        return;
    }

    // The Staff Role taxonomy already supplies the job title on staff cards.
    $staff->template = array(
        array(
            'core/paragraph',
            array( 'placeholder' => 'Write a short staff biography here.' ),
        ),
        array(
            'core/paragraph',
            array( 'placeholder' => 'Enter an example email address, then link it using mailto:name@example.com.' ),
        ),
    );
    $staff->template_lock = false;
}
add_action( 'init', 'school_staff_editor_template', 20 );

/** Show a helpful name prompt when creating a student or staff post. */
function school_custom_name_placeholder( $title, $post ) {
    if ( 'student' === $post->post_type ) {
        return __( 'Add student name', 'school-custom' );
    }

    if ( 'staff' === $post->post_type ) {
        return __( 'Add staff name', 'school-custom' );
    }

    return $title;
}
add_filter( 'enter_title_here', 'school_custom_name_placeholder', 10, 2 );

/** Keep the Student editor's block locks out of the editing controls. */
function school_student_editor_lock_settings( $settings, $context ) {
    if ( ! empty( $context->post ) && 'student' === $context->post->post_type ) {
        $settings['canLockBlocks'] = false;
    }

    return $settings;
}
add_filter( 'block_editor_settings_all', 'school_student_editor_lock_settings', 10, 2 );

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

/* Load custom blocks. */
require_once get_theme_file_path( 'school-blocks/school-blocks.php' );

/** Show every staff member in each group on the Staff page. */
function school_staff_listing_query( $query, $block ) {
    if ( is_page( 'staff' ) && 'staff' === ( $block->context['query']['postType'] ?? '' ) ) {
        $query['posts_per_page'] = -1;
        $query['offset'] = 0;
    }

    return $query;
}
add_filter( 'query_loop_block_query_vars', 'school_staff_listing_query', 20, 2 );
