const mix = require('laravel-mix');

require('mix-tailwindcss');

mix.sass('resources/sass/style.scss', 'public/css')
    .tailwind('./tailwind.js');


mix.js('resources/js/main.js', 'public/js')