<?php

namespace kuri_classes;

class Boot {

	private array $bootClasses;


	public function __construct() {

		$this->boot_classes();
		add_action('after_setup_theme', [$this, 'theme_setup'] );

	}


	protected function boot_classes() {

		foreach ( glob( get_template_directory() . '/classes/Boot/*') as $file ){

			$classname = 'kuri_classes\Boot\\' . pathinfo($file, PATHINFO_FILENAME);
			$boot =  new $classname();

			$boot();

		}

	}

	public function theme_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		// Let WordPress manage the document title.
		add_theme_support('title-tag');

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus([
			'primary' => __('Primary Menu', 'kuri'),
			'footer'  => __('Footer Menu', 'kuri'),
		]);

		// Switch default core markup for search form, comment form, and comments to output valid HTML5.
		add_theme_support('html5', [
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		]);
		add_theme_support('post-formats', ['video', 'gallery']);
	}

}