<?php

namespace Verevkin\EasyPattern\Compiler\Interfaces;

interface Compiler
{
	/**
	 * Compile inner text <b>$text</b> using compiler context
	 *
	 * @see CompilerContext
	 * @param string $text
	 * @return string
	 */
	public function compile(string $text): string;
}