<?php

get_header();
$author = get_user_by('slug', get_query_var('author_name'));

get_header();

$query = new \WP_Query([
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'author'              => $author->data->ID,
    'ignore_sticky_posts' => true,
    'posts_per_page'      => 10,
    'category__not_in'    => [17, 696, 159],
    'tag__not_in'         => 989,
]);
?>

    <div class="container mx-auto mt-32">
        <h1 class="font-sans text-5xl uppercase font-semibold text-gray-800 text-center">
            <a href="/lesen" class="underline">
                <?php _e('lesen', 'ir21') ?>
            </a>
        </h1>
    </div>

    <div class="container mx-auto mt-32 px-5 lg:px-0">
        <div class="flex flex-col lg:flex-row items-end">
            <div class="w-full lg:w-1/2">
                <img src="<?php echo get_field('field_5ded37c474589', 'user_' . $author->ID)['sizes']['article'] ?>" class="w-full h-auto">
            </div>
            <div class="w-full lg:w-1/2 bg-gray-900 text-white -ml-5 -mb-5 pt-12 lg:pt-5 p-5 pr-16 relative">
                <h1 class="text-2xl font-serif font-semibold"><?php echo $author->data->display_name ?></h1>
                <p><?php echo $author->description ?></p>
            </div>
        </div>
    </div>

    <div class="container mx-auto mt-32">
        <?php if ($query->have_posts()): ?>
            <div class="grid grid-cols-2 gap-10">
                <?php while ($query->have_posts()): ?>
                    <?php $query->the_post(); ?>


                    <div class="col-span-2 md:col-span-1 relative">
                        <a href="<?php the_permalink(); ?>" class="relative block bg-primary bg-gray-900 h-full">
                            <div class="bg-primary-100 w-full h-full pt-75p flex items-center justify-center" style="padding-top: 56%">
                                <?php the_post_thumbnail('article', ['class' => 'w-full h-auto max-w-full', 'style' => 'margin-top: -56%']); ?>
                            </div>
                            <div class="absolute bottom-0 left-0">
                                <h1 class="font-serif text-white text-2xl p-5  bg-gray-800 bg-opacity-50 w-full"><?php the_title() ?></h1>
                            </div>
                        </a>
                    </div>


                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="mt-48">
		<?php \irclasses\Pagination::paginate();?>
    </div>

<?php get_footer();
