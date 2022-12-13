<?php

namespace kuri_classes\Boot;

class Menu {





	public function __invoke() {

		add_action( 'init', [ $this, 'register_my_menu' ] );
	}

	function register_my_menu() {

		register_nav_menu( 'main-menu', 'Hauptmenu' );
	}
}