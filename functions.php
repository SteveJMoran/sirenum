<?php 
function sirenum_scripts() {
	//styles
	wp_enqueue_style( 'bootstrap-css-cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' );

	//JS Scripts
	wp_enqueue_script( 'jQuery', 'https://code.jquery.com/jquery-1.11.3.min.js');
	wp_enqueue_script( 'bootstrap-js-cdn', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js');
}

add_action( 'wp_enqueue_scripts', 'sirenum_scripts' );