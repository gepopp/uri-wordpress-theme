<?php


namespace kuri_classes\Boot;


class ImageSizes {


	public function __invoke() {

		add_action('after_setup_theme', [$this, 'add_image_sizes'] );

	}


	public function add_image_sizes(){

		add_image_size('custom-thumbnail', 800, 600, true);
		add_image_size('featured', 800, 450, true);
		add_image_size('featured_small', 300, (300 / 16) * 9, true);

	}
}