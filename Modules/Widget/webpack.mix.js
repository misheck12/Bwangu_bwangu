const dotenvExpand = require('dotenv-expand');
dotenvExpand(require('dotenv').config({ path: '../../.env'/*, debug: true*/}));

const mix = require('laravel-mix');

mix.js(__dirname + '/Resources/assets/js/app.js', 'assets/modules/js/widget.js')
    .sass( __dirname + '/Resources/assets/sass/app.scss', 'assets/modules/css/widget.css');

if (mix.inProduction()) {
    mix.version();
}
