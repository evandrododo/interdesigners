var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');

    mix.scripts([
	    '../../assets/js/jquery.motio.min.js',
	    '../../assets/js/ajaxload.js',
	    '../../assets/js/components/simposio/form.js',
	    '../../assets/js/menu-interno.js',
	    '../../../bower_components/DataTables/media/js/jquery.dataTables.js'
	], 'public/js/min.js');
});
