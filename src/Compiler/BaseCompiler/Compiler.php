<?php

namespace Verevkin\EasyPattern\Compiler\BaseCompiler;

use Verevkin\EasyPattern\Compiler\Interfaces;

class Compiler implements Interfaces\Compiler
{
	protected Interfaces\FragmentContext $context;

	public function setContext(Interfaces\FragmentContext $context): void
	{
		$this->context = $context;
	}

	public function getContext(): Interfaces\FragmentContext
	{
		return $this->context;
	}

	public function compile(string $text): string
	{

	}
}