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
    mix.sass('app.sass');

    mix.styles([
        'node_modules/skeleton-css/css/normalize.css',
        'node_modules/skeleton-css/css/skeleton.css',
        'public/css/app.css'
    ], 'public/css/app.css', './');
});
