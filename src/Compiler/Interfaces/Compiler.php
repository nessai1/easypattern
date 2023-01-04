<?php

namespace Verevkin\EasyPattern\Compiler\Interfaces;

interface Compiler
{
	/**
	 * Set context for compiler
	 *
	 * @see CompilerContext
	 * @param CompilerContext $context
	 * @return void
	 */
	public function setContext(CompilerContext $context): void;

	/**
	 * Get context of compiler
	 *
	 * @see CompilerContext
	 * @return CompilerContext
	 */
	public function getContext(): CompilerContext;

	/**
	 * Compile inner text <b>$text</b> using compiler context
	 *
	 * @see CompilerContext
	 * @param string $text
	 * @return string
	 */
	public function compile(string $text): string;
}