<div class="section container" id="start">
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 gap-0 lg:gap-10">
        <div class="flex flex-col sm:flex-row items-center justify-center space-x-5 pb-36 pt-48 lg:py-48 px-5">
            <div class="lg:hidden grow-0 flex-none w-full sm:w-36 mb-10 flex justify-center">
                <img src="<?php echo get_field('field_6398ab18c467c', 'option')['sizes']['thumbnail'] ?>"
                     class="w-36 h-auto rounded-full"
                     data-aos="fade-left"
                     data-aos-easing="ease-in-sine"
                     data-aos-duration="500"
                     data-aos-anchor-placement="top-bottom"
                     data-aos-once="true"
                >
            </div>
            <div data-aos="fade-right"
                 data-aos-easing="ease-in-sine"
                 data-aos-duration="500"
                 data-aos-once="true">
                <h1 class="text-3xl lg:text-5xl font-serif text-logo-dark font-medium"><?php the_field('field_6398ab49c467d', 'option'); ?></h1>
                <h1 class="text-3xl lg:text-5xl font-serif text-logo-medium font-medium"><?php the_field('field_6398ab55c467e', 'option'); ?></h1>
                <p class="mt-5 text-logo-dark text-lg"><?php the_field('field_6398ab68c467f', 'option'); ?></p>
            </div>

        </div>
        <div class="lg:hidden xl:block"></div>
        <div class="hidden lg:flex bg-gray-100 lg:-mr-10 relative mt-1"
             data-aos="fade-left"
             data-aos-easing="ease-in-sine"
             data-aos-duration="500"
             data-aos-anchor-placement="top-center"
             data-aos-once="true">
            <img src="<?php echo get_field('field_6398ab18c467c', 'option')['url'] ?>" class="absolute mt-28 lg:-ml-10 xl:-ml-28 aspect-[3/4] drop-shadow-md">
        </div>
    </div>
</div>