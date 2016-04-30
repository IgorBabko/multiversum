var elixir = require('laravel-elixir');
var postStylus = require('poststylus');

require('laravel-elixir-livereload');
require('laravel-elixir-stylus');


elixir(function(mix) {

    mix
        .stylus('app.styl', null, {
            use: [
                postStylus( [ 'autoprefixer', 'lost', 'rucksack-css' ] )
            ]
        })
        .coffee('app.coffee', 'resources/assets/js')
        .browserify('app.js')
        .livereload();

    mix
        .copy('bower_components/oh-snap/ohsnap.min.js', 'public/js/ohsnap.min.js')
        .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
        .copy('node_modules/bootstrap-sass/assets/fonts/bootstrap', 'public/fonts/bootstrap')
        .copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
        .copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js')
        .copy('node_modules/font-awesome/css/font-awesome.css', 'public/css/font-awesome.css')
        .copy('node_modules/font-awesome/fonts', 'public/fonts')
        .copy('node_modules/scrollmagic/scrollmagic/uncompressed/ScrollMagic.js', 'public/js/ScrollMagic.js')
        .copy('node_modules/scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators.js', 'public/js/debug.addIndicators.js');
});
