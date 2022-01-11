<?php


namespace kuri_classes\Boot;


class Enqueue {


	public function __construct() {

		add_action( 'wp_enqueue_scripts', [ $this, 'ir_enqueue_scripts_and_styles' ] );
		add_action( 'admin_enqueue_scripts', [ $this, 'ir_admin_script' ] );

	}


	public function ir_admin_script(  ) {

		wp_enqueue_script( 'ir_admin_script', KURI_THEME_URL . "/dist/admin.js", [], '1.0' );
	}


	public function ir_enqueue_scripts_and_styles() {

		$this->ir_dequeue_scripts();

		$min_ext = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

		// CSS
		wp_enqueue_style(
			'immobilien_redaktion_2020_css',
			KURI_THEME_URL . "/dist/main.css",
			[],
			KURI_THEME_VERSION,
			''
		);


		wp_enqueue_script(
			'immobilien_redaktion_2020_js',
			KURI_THEME_URL . "/dist/main{$min_ext}.js",
			[],
			KURI_THEME_VERSION,
			true
		);


	}


	public function ir_dequeue_scripts() {
		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS

		wp_dequeue_script( 'jquery' );
	}
}