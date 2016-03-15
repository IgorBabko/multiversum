var elixir = require('laravel-elixir');

require('laravel-elixir-livereload');

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
    mix.sass('app.sass');
    mix.sass('dashboard.sass');

    mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');

    mix.copy('bower_components/oh-snap/ohsnap.min.js', 'public/js/ohsnap.min.js');

    mix.copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/bootstrap');
    mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css');
    mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');
    mix.copy('node_modules/font-awesome/css/font-awesome.css', 'public/css/font-awesome.css');
    mix.copy('node_modules/font-awesome/fonts', 'public/fonts');

    mix.copy('node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js', 'public/js/ScrollMagic.js');
    mix.copy('node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js', 'public/js/debug.addIndicators.js');

    mix.copy('node_modules/bootstrap-select/dist/css/bootstrap-select.min.css', 'public/css/bootstrap-select.min.css');
    mix.copy('node_modules/bootstrap-select/dist/js/bootstrap-select.min.js', 'public/js/bootstrap-select.min.js');

    // dashboard specific files
    mix.copy('node_modules/bootstrap-table/dist/bootstrap-table.min.css', 'public/css/bootstrap-table.min.css');
    mix.copy('node_modules/bootstrap-table/dist/bootstrap-table.min.js', 'public/js/bootstrap-table.min.js');
    mix.copy('node_modules/bootstrap-table/dist/locale/bootstrap-table-ru-RU.min.js', 'public/js/bootstrap-table-ru-RU.min.js');


    mix.livereload();
});
