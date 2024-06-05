const mix = require('laravel-mix');

mix.setPublicPath('public')
   .postCss('resources/css/app.css', 'public/css');