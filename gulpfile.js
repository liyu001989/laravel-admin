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

    // css
    // mix.copy('resources/assets/bower/AdminLTE/dist/css/AdminLTE.min.css', 'public/css/AdminLTE.min.css');
    // mix.copy('resources/assets/bower/AdminLTE/dist/css/skins/skin-red-light.min.css', 'public/css/skin-red-light.min.css');
    // mix.copy('resources/assets/bower/bootstrap/dist/css/bootstrap.min.css', 'public/css/skin-red-light.min.css');

    // js
    mix.copy('resources/assets/bower/AdminLTE/dist/js/app.min.js', 'public/js/AdminLTE.min.js');
    mix.copy('resources/assets/bower/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
    mix.copy('resources/assets/bower/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js');

    // minify
    mix.scripts(['../bower/bootbox.js/bootbox.js'], 'public/js/bootbox.min.js');

    // fonts
    mix.copy('resources/assets/bower/font-awesome/fonts/', 'public/fonts/');

    mix.styles([
        '../bower/AdminLTE/dist/css/AdminLTE.min.css',
        '../bower/AdminLTE/dist/css/skins/skin-red-light.min.css',
        '../bower/bootstrap/dist/css/bootstrap.min.css',
        '../bower/font-awesome/css/font-awesome.min.css',
    ]);

});
