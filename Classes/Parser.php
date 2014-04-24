<?php
namespace Phile\Plugin\Phile\Parsedown;

use Phile\ServiceLocator\ParserInterface;

class Parser implements ParserInterface {

	public function __construct($config = null) {
		// no settings for this parser
	}

	// overload parse with the Parsedown parser
	public function parse($data) {
		return \Parsedown::instance()->parse($data);
	}
}
