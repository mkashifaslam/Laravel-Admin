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
    mix.sass('app.scss');
});

/*elixir(function(mix) {
    mix.copy('bower_components', 'public/bower_components');
});

elixir(function(mix) {
    mix.copy('node_modules', 'public/node_modules');
});*/

elixir(function(mix) {
    mix.babel([
        'react.js'
    ], 'public/dist/js/react-components.js', 'public/dist/js');
});