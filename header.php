<!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <meta name="keywords" content="immobilienredaktion, immobilienmagazin, Immobilien Redaktion, Immobilien Magazin, Wien, Immobilien, Immoflash, ImmoWelt, International, Investment, Markt, Mieten, Wohnen, Österreich">
    <meta name="description" content="<?php echo get_the_excerpt() ?>">
    <link rel="icon" type="image/png" href="<?= get_stylesheet_directory_uri() . '/assets/images/favicon.png'; ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
    <script>
        window.ajaxurl = '<?php echo admin_url('admin-ajax.php') ?>';
    </script>
    <link rel="stylesheet" href="https://use.typekit.net/rip2qvi.css">
    <link rel="stylesheet" href="https://use.typekit.net/rip2qvi.css">
</head>
<body>
<main>
    <?php get_template_part('part', 'namebar') ?>