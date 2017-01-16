let mix = require('laravel-mix').mix;

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */

mix.js('resources/assets/user/js/app.js', 'public/user/js')
    .sass('resources/assets/user/sass/app.scss', 'public/user/css');
mix.sourceMaps(); // Enable sourcemaps
// mix.version();
