var elixir = require('laravel-elixir');

elixir.config.assetsDir = 'app/assets/';
elixir.config.cssOutput = 'public_html/css';

elixir(function(mix){
    mix.sass('app.sass')
        .version(['css/app.css', 'public_html/build']);
});