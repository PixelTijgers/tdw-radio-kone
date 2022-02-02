// Import bootstrap file.
require('./bootstrap');

// Import alpine js file.
require('alpinejs');

// Init Common & load.
(window['Common'] = require('./load.js')).init();
