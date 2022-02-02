const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'js/app.js');

mix.postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/animacao.css', 'public/css')
    .postCss('resources/css/header.css', 'public/css');
    
mix.scripts('resources/js/funcoes.js', 'public/js/funcoes.js');