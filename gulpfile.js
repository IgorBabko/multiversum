var elixir = require('laravel-elixir');

require('laravel-elixir-livereload');

elixir(function(mix) {

    mix.copy('node_modules/skeleton-css/css/normalize.css', 'public/css/normalize.css');
    mix.copy('node_modules/skeleton-css/css/skeleton.css', 'public/css/skeleton.css');

    mix
        .sass('app.sass')
        .livereload();
});
