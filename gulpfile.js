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
    mix.styles([
    	'/../../../node_modules/bootstrap/dist/css/bootstrap.css',
    	'carrousel.css',
    	'app.css'
    	] ,'public/css/app.css');


    mix.scripts([
    	'/../../../node_modules/jquery/dist/jquery.js',
    	'/../../../node_modules/bootstrap/dist/js/bootstrap.js',
    	'ie-emulation-modes-warning.js',
    	'ie10-viewport-bug-workaround.js',
    	'holder.js',
    	'app.js'
    	] ,'public/js/main.js');
});
