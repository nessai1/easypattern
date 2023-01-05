<?php

namespace Verevkin\EasyPattern\Compiler\Interfaces;

interface Fragment
{
	/**
	 * Set context for compiler
	 *
	 * @see CompilerContext
	 * @param FragmentContext $context
	 * @return void
	 */
	public function setContext(FragmentContext $context): void;

	/**
	 * Get context of compiler
	 *
	 * @see CompilerContext
	 * @return FragmentContext
	 */
	public function getContext(): FragmentContext;

	public function computeFragment(): string;

	public function getParentFragment(): Fragment|null;
}