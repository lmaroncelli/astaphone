const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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


elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js')
       .combine(['public/js/app.js', 'node_modules/cd-summernote/index.js'],'public/js/app.js')
       .copy('node_modules/dropzone/dist/dropzone.js','public/js/dropzone.js')
       .copy('node_modules/dropzone/dist/basic.css','public/css/dropzone/basic.css')
       .copy('node_modules/dropzone/dist/dropzone.css','public/css/dropzone/dropzone.css')
       .less('index.less','public/css/supernote.css','node_modules/cd-summernote')
       .copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts')
       .copy('node_modules/cd-summernote/fonts', 'public/css/fonts');
});