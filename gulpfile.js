var elixir = require('laravel-elixir');

require('laravel-elixir-livereload');

elixir(function(mix) {
    mix.sass('app.sass');
    mix.styles([
            'node_modules/skeleton-css/css/normalize.css',
            'node_modules/skeleton-css/css/skeleton.css',
            'public/css/app.css'
        ], 'public/css/app.css', './');
});
