const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
    mix.sass(
      ['app.scss',
      'style.scss'],
      'public/css/app.css');

     mix.webpack('app.js');

     mix.styles([
         'animate.css',
         'bootstrap.min.css',
         'font-awesome.min.css',
         'prettyPhoto.css',
     ], 'public/css/index.css');

     mix.styles([
         'animate.min.css',
         'bootstrap-theme.min.css',
         'bootstrap.min.css',
         'font-awsome.min.css'
     ], 'public/css/main.min.css');

     mix.styles([
         'prettyPhoto.css',
     ], 'public/css/theme.css');
});
