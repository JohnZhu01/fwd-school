<?php
// This file is generated. Do not modify it manually.
return array(
	'scroll-reveal' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'school-blocks/scroll-reveal',
		'version' => '0.1.0',
		'title' => 'Scroll Reveal',
		'category' => 'design',
		'icon' => 'smiley',
		'description' => 'Animate content as it scrolls into view.',
		'example' => array(
			
		),
		'attributes' => array(
			'animation' => array(
				'type' => 'string',
				'default' => 'fade-up'
			)
		),
		'supports' => array(
			'html' => false
		),
		'textdomain' => 'scroll-reveal',
		'editorScript' => 'file:./index.js',
		'viewStyle' => 'file:./style-index.css',
		'viewScript' => 'file:./view.js'
	)
);
