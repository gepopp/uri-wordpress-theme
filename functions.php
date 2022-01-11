<?php
/**
 * Kickoff theme setup and build
 */

namespace christina_kuri;



use kuri_classes\Boot;



define('KURI_THEME_VERSION', wp_get_theme()->version);
define('KURI_THEME_DIR', __DIR__);
define('KURI_THEME_URL', get_template_directory_uri());


$loader = require_once( KURI_THEME_DIR . '/vendor/autoload.php' );
$loader->addPsr4('kuri_classes\\', __DIR__ . '/classes');

\A7\autoload(__DIR__ . '/src');

new Boot();