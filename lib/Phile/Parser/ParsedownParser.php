<?php
namespace Phile\Parser;

class ParsedownParser implements ParserInterface {

	public function __construct($config = null)
	{
		// no settings for this parser
	}
	// overload parse with the Parsedown parser
	public function parse($data) {
		return \Parsedown::instance()->parse($data);
	}
}
