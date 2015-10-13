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
    	'style.css',
    	'app.css'
    	] ,'public/css/app.css');


    mix.scripts([
    	'jquery.js',
        'bootstrap.min.js',
        'jqBootstrapValidation.js',
    	'contact_me.js',
    	
    	'app.js'
    	] ,'public/js/main.js');
});
