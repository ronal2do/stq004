var elixir = require('laravel-elixir'),
    gulp    = require('gulp'),
    htmlmin = require('gulp-htmlmin');
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
        'sweetalert.css',
        'style.css'
    ] ,'public/css/app.css');


    mix.scripts([
        'bootstrap.min.js', 
        'plugins.js' ,
        'classie.js', 
        'jquery.themepunch.tools.min.js', 
        'scripts.js',
        'sweetalert.min.js'
    ] ,'public/js/main.js');
});

elixir.extend('compress', function() {
    new elixir.Task('compress', function() {
        return gulp.src('./resources/views2/site/**/*')
            .pipe(htmlmin({
                collapseWhitespace:    true,
                removeAttributeQuotes: true,
                removeComments:        true,
                minifyJS:              true,
            }))
            .pipe(gulp.dest('./resources/views/site/'));
    })
    .watch('./resources/views/*');
});

elixir(function(mix) {
    mix.compress();
});