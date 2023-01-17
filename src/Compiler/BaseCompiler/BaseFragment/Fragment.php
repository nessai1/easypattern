<?php

namespace Verevkin\EasyPattern\Compiler\BaseCompiler\BaseFragment;

use Verevkin\EasyPattern\Compiler\Interfaces;
use Verevkin\EasyPattern\Compiler\Interfaces\FragmentContext;

class Fragment implements Interfaces\Fragment
{

	public function setContext(FragmentContext $context): void
	{
		// TODO: Implement setContext() method.
	}

	public function getContext(): FragmentContext
	{
		// TODO: Implement getContext() method.
	}

	public function computeFragment(): string
	{
		// TODO: Implement computeFragment() method.
	}

	public function getParentFragment(): \Verevkin\EasyPattern\Compiler\Interfaces\Fragment|null
	{
		// TODO: Implement getParentFragment() method.
	}

	public function getFragmentId(): int
	{
		return spl_object_id($this);
	}
}