<?php

    /**
     * @file
     * H5F form validation support.
     *
     * Provides support for html5 "required" attributes in older browsers.
     *
     * @package h5f
     * @link http://www.alistapart.com/articles/forward-thinking-form-validation/
     * @link https://github.com/ryanseddon/H5F
     * @license The MIT License (see LICENCE.txt), other licenses available.
     * @author Marcus Povey <marcus@marcus-povey.co.uk>
     * @copyright Marcus Povey 2009-2012
     * @link http://www.marcus-povey.co.uk
     */

    function h5f_init()
    {
	    global $CONFIG;

	    plugin_depends('js_page');

	    // Override and extend some views
	    extend_view('js', 'h5f/js');
	    extend_view('input/form', 'h5f/form');

    }

    register_event('system', 'init', 'h5f_init');