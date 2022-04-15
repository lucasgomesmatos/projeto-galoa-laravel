const mix = require("laravel-mix");

mix
  .styles("resources/views/assets/css/style.css", "public/assets/css/style.css")
  .styles("resources/views/assets/css/global.css", "public/assets/css/global.css")

  .js("resources/views/assets/js/scripts.js", "public/assets/js")

.version();
