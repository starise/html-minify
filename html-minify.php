<?php

/* ======================================================================

    Plugin Name: HTML Minify
    Plugin URI: http://github.com/starise/html-minify
    Description: Minify your HTML output in WordPress. Control what gets minified under <a href="options-general.php?page=html_minify_theme_options">Settings &rarr; HTML Minify</a>.
    Version: 1.2
    Author: Andrea Brandi
    Author URI: http://andreabrandi.com
    License: MIT

    Based on DVS.
    http://www.intert3chmedia.net/2011/12/minify-html-javascript-css-without.html

    Forked from html-minify by Chris Ferdinandi
    http://github.com/cferdinandi/html-minify

 * ====================================================================== */

require_once( dirname( __FILE__) . '/html-minify-options.php' );
require_once( dirname( __FILE__) . '/html-minify-process.php' );

?>