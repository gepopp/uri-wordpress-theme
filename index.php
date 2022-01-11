<?php
/**
 * The default single page template.
 *
 * @author Freeshifter LLC
 * @since  1.0.0
 */

get_header();
?>
    <div class="container">
        <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-0 lg:gap-10">
            <div class="flex space-x-5 py-10 lg:py-48 px-5">

                <div class="lg:hidden">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/kuri-praxis-quadrat.jpg" class="rounded-full w-48 h-auto">
                </div>
                <div>
                    <h1 class="text-3xl lg:text-5xl font-serif text-logo-dark font-medium">Hypnose ist ein</h1>
                    <h1 class="text-3xl lg:text-5xl font-serif text-logo-medium font-medium">Bewusstseinszustand.</h1>
                    <p class="mt-5 text-logo-dark text-lg">
                        &rdquo; Nicht Bewusstlosigkeit oder Schlaf. Ein Zustand des Bewusstseins oder Erkenntnis,
                        in dem eine ausgeprägte Aufnahmefähigkeit für Ideen und Verständnis besteht und eine erhöhte Bereitschaft,
                        auf diese Ideen positiv oder negativ zu reagieren. &ldquo;
                    </p>
                    <p class="mt-5">Milton H. Erickson</p>
                </div>

            </div>
            <div class="lg:hidden xl:block"></div>
            <div class="hidden lg:flex bg-gray-100 lg:-mr-10">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/kuri-praxis-600p.jpg" class="mt-20 lg:-mb-20 lg:-ml-10 xl:-ml-28 aspect-[3/4]">
            </div>
        </div>
    </div>
    <div class="bg-logo-light py-48">
        <div class="container py-48 bg-cover bg-center" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-leaves.svg)">

        </div>
    </div>
<?php
get_footer();
