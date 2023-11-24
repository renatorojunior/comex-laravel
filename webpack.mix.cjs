const mix = require('laravel-mix');

mix
  .sass('resources/css/app.scss', 'public/css')
  .js('resources/js/app.js', 'public/js')  // Certifique-se de que esta linha está correta
  .babel(['resources/js/app.js'], 'public/js/app.js');  // Corrija esta linha
