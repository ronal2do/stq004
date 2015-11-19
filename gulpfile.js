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
    	'bootstrap.min.css',
        'plugins.css',
        'style.css'
    	] ,'public/css/app.css');


    mix.scripts([

        'bootstrap.min.js', 
        'plugins.js' ,
        'classie.js', 
        'jquery.themepunch.tools.min.js', 
        'scripts.js',
        'switchstylesheet.js'
    	] ,'public/js/main.js');
});
