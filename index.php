<?php
/**
 * The default single page template.
 *
 * @author Freeshifter LLC
 * @since  1.0.0
 */

get_header();

get_template_part('frontsections', 'start');
get_template_part('frontsections', 'cite');
get_template_part('frontsections', 'method');
get_template_part('frontsections', 'focus');
get_template_part('frontsections', 'setting');
get_template_part('frontsections', 'contact');

get_footer();
