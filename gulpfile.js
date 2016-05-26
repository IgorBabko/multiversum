var elixir = require('laravel-elixir');

require('laravel-elixir-livereload');

elixir(function(mix) {

    mix
        .copy('node_modules/skeleton-css/css/normalize.css', 'public/css/normalize.css')
        .copy('node_modules/skeleton-css/css/skeleton.css', 'public/css/skeleton.css')
        .copy('node_modules/font-awesome/css/font-awesome.css', 'public/css/font-awesome.css')
        .copy('node_modules/font-awesome/fonts', 'public/fonts')
        .copy('node_modules/jquery/dist/jquery.min.js', 'public/js')
        .copy('bower_components/parallax.js/parallax.min.js', 'public/js');

    mix
        .sass('app.sass')
        .scripts(['app.js'])
        .livereload();
});
