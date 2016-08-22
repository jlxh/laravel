var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    // Merge dependencies 
    mix.scripts([
        'jquery/dist/jquery.js',
        'bootstrap/dist/js/bootstrap.js',
        'jquery-pjax/jquery.pjax.js'
    ], 'public/js/lib.js', 'node_modules');

    mix.styles([
        'bootstrap/dist/css/bootstrap.css',
        'font-awesome/css/font-awesome.css'
    ], 'public/css/lib.css', 'node_modules');

    // compile main assets
    mix.scripts('admin.js');
    mix.styles('admin.css');

    // Distribute with version token
    mix.version(['js/lib.js', 'css/lib.css','js/admin.js', 'css/admin.css']);

    // Copy fonts files
    // To build folder
    mix.copy('node_modules/bootstrap/dist/fonts', 'public/build/fonts');
    mix.copy('node_modules/font-awesome/fonts', 'public/build/fonts');

    //To public folder
    // Copy fonts files
    mix.copy('node_modules/bootstrap/dist/fonts', 'public/fonts');
    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
});
