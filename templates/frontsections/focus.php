<div class="section bg-white py-24 md:py-48 snap-always scroll-start scroll-pt-48" id="focus">
    <div class="container overflow-hidden py-24 md:py-48 bg-contain bg-no-repeat bg-center flex flex-col justify-center">
        <h1 class="text-3xl xl:text-5xl lg:text-5xl font-serif text-logo-dark font-medium text-center mb-10">Meine Schwerpunkte sind:</h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 w-full">
            <div class="mt-10">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-left.svg" class="w-1/3 h-auto float-right bg-gray-100 bg-opacity-40 py-5 ml-5
                                       [clip-path:ellipse(100%_50%_at_100%_50%)]
                                       [shape-outside:ellipse(100%_50%_at_100%_50%)]
                    ">
				<?php
				$items = get_field( 'field_6398b16b8605b', 'option' );
				$count = count( $items );
				$first = floor( $count / 2 );
				?>
                <ul class="text-2xl text-right">
					<?php for ( $i = 1; $i <= $first; $i ++ ): ?>
						<?php $item = array_shift( $items ); ?>
                        <li class="mb-6 mr-10" data-aos-once="true" data-aos-delay="0" data-aos="slide-left" data-aos-easing="ease-in-sine" data-aos-duration="300"><?php echo $item['schwerpunkt_text'] ?></li>
					<?php endfor; ?>
                </ul>
            </div>
            <div class="mt-10">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logo-right.svg" class="w-1/3 h-auto float-left bg-gray-100 bg-opacity-40 py-5 mr-5
                                       [clip-path:ellipse(100%_50%_at_0%_50%)]
                                       [shape-outside:ellipse(100%_50%_at_0%_50%)]
                    ">
                <ul class="text-2xl text-left">
					<?php foreach ( $items as $item ): ?>
                        <li class="mb-6 mr-10" data-aos-once="true" data-aos-delay="0" data-aos="slide-right" data-aos-easing="ease-in-sine" data-aos-duration="300"><?php echo $item['schwerpunkt_text'] ?></li>
					<?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
