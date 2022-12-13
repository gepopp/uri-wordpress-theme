<?php


namespace kuri_classes\Boot;


class Enqueue {





	public function __invoke() {

		add_filter( 'script_loader_tag', [ $this, 'filter_script_loader_tag' ], 10, 2 );
		add_action( 'wp_enqueue_scripts', [ $this, 'ir_enqueue_scripts_and_styles' ] );
		//add_action( 'admin_enqueue_scripts', [ $this, 'ir_admin_script' ] );

	}


	public function ir_admin_script() {

		wp_enqueue_script( 'ir_admin_script', KURI_THEME_URL . "/dist/admin.js", [], '1.0' );
	}


	public function ir_enqueue_scripts_and_styles() {

		$this->ir_dequeue_scripts();

		// CSS
		wp_enqueue_style(
			'kuri_2020_css',
			KURI_THEME_URL . "/public/css/style.css",
			[],
			KURI_THEME_VERSION,
			''
		);


		wp_enqueue_script(
			'kuri_2020_js',
			KURI_THEME_URL . "/public/js/main.js",
			[],
			KURI_THEME_VERSION,
			true
		);
		wp_script_add_data( 'kuri_2020_js', 'defer', true );

	}


	public function ir_dequeue_scripts() {

		wp_dequeue_style( 'wp-block-library' );
		wp_dequeue_style( 'wp-block-library-theme' );
		wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS

		wp_dequeue_script( 'jquery' );
	}


	public function filter_script_loader_tag( $tag, $handle ) {

		foreach ( [ 'async', 'defer' ] as $attr ) {
			if ( ! wp_scripts()->get_data( $handle, $attr ) ) {
				continue;
			}
			// Prevent adding attribute when already added in #12009.
			if ( ! preg_match( ":\s$attr(=|>|\s):", $tag ) ) {
				$tag = preg_replace( ':(?=></script>):', " $attr", $tag, 1 );
			}
			// Only allow async or defer, not both.
			break;
		}

		return $tag;
	}


}