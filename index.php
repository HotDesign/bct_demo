<?php
	/**
	 * INDEX PAGE
	 * 
	 * @package core
	 * @license The MIT License (see LICENCE.txt), other licenses available.
	 * @author Marcus Povey <marcus@marcus-povey.co.uk>
	 * @copyright Marcus Povey 2009-2012
	 * @link http://www.marcus-povey.co.uk
	 */

	require_once(dirname(__FILE__) . "/engine/start.php");
        $content = "INDEX SITE !";
        
        output_page('DEMO', $content);