<?php

namespace kuri_classes\Boot;

class ACF {





	public function __invoke() {

		if ( function_exists( 'acf_add_options_page' ) ) {

			acf_add_options_page( [
				'page_title' => 'Landingpage General Settings',
				'menu_title' => 'Theme Settings',
				'menu_slug'  => 'theme-general-settings',
				'capability' => 'edit_posts',
				'redirect'   => false,
			] );

			acf_add_options_sub_page( [
				'page_title'  => 'Landingpage Header Settings',
				'menu_title'  => 'Header',
				'parent_slug' => 'theme-general-settings',
			] );

			acf_add_options_sub_page( [
				'page_title'  => 'Landingpage Intro Sektion',
				'menu_title'  => 'Intro',
				'parent_slug' => 'theme-general-settings',
			] );

			acf_add_options_sub_page( [
				'page_title'  => 'Landingpage Zitat Sektion',
				'menu_title'  => 'Zitat',
				'parent_slug' => 'theme-general-settings',
			] );

			acf_add_options_sub_page( [
				'page_title'  => 'Landingpage Schwerpunkte Sektion',
				'menu_title'  => 'Schwerpunkte',
				'parent_slug' => 'theme-general-settings',
			] );

			acf_add_options_sub_page( [
				'page_title'  => 'Landingpage Sektion Methode',
				'menu_title'  => 'Methode',
				'parent_slug' => 'theme-general-settings',
			] );

			acf_add_options_sub_page( [
				'page_title'  => 'Landingpage Sektion Rahmenbedingungen',
				'menu_title'  => 'Rahmenbedingungen',
				'parent_slug' => 'theme-general-settings',
			] );

			acf_add_options_sub_page( [
				'page_title'  => 'Landingpage Sektion Kontakt',
				'menu_title'  => 'Kontakt',
				'parent_slug' => 'theme-general-settings',
			] );

		}
	}
}