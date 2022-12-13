<div class="section bg-logo-dark py-24 md:py-48" id="setting">
    <div class="container py-24 md:py-48 bg-auto bg-no-repeat bg-bottom text-white" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/assets/images/bg-leaves-down.svg)">
        <div class="flex flex-col mb-10">
            <h1 class="text-3xl lg:text-5xl font-serif font-medium"><?php the_field( 'field_6398b510b557a', 'option' ) ?></h1>
            <h1 class="text-3xl lg:text-5xl font-serif text-logo-medium font-medium"><?php the_field( 'field_6398b530b557b', 'option' ) ?></h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-0 md:gap-5 lg:gag-10 w-full">
			<?php foreach ( get_field( 'field_6398b538b557c', 'option' ) as $setting ): ?>
                <div class="flex flex-col p-5 bg-white bg-opacity-5"
                     data-aos="fade"
                     data-aos-easing="ease-in-sine"
                     data-aos-duration="300"
                     data-aos-anchor-placement="top-bottom"
                     data-aos-once="true">
                    <h3 class="text-lg font-serif text-logo-medium"><?php echo $setting['rahmenbedingungen_textbox_titel'] ?></h3>
                    <p><?php echo $setting['rahmenbedingungen_textbox_text'] ?></p>
                </div>
			<?php endforeach; ?>
        </div>
    </div>
</div>