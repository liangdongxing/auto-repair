const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

// mix.styles([
//     'public/admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css',
//     //'public/bower_components/font-awesome/css/font-awesome.min.css',
//     'public/admin-lte/bower_components/Ionicons/css/ionicons.min.css',
//     'public/admin-lte/dist/css/AdminLTE.min.css',
//     'public/admin-lte/dist/css/skins/skin-blue.min.css',
//     'public/admin-lte/plugins/iCheck/square/blue.css'
// ], 'public/css/app.css');
