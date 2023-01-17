<?php

namespace Verevkin\EasyPattern\Compiler\Interfaces;

use Verevkin\EasyPattern\Base\Interfaces;
use Verevkin\EasyPattern\Compiler\Interfaces\Context\Context;

/**
 * Context of compiler that involved in inner text compilation and contain variables
 * This entity is operating with <b>Verevkin\EasyPattern\Compiler\Interfaces\Context</b>
 *
 * @see Context
 */
interface FragmentContext extends Interfaces\Container
{
	public function __construct(Fragment $fragment);
	public function getFragment(): Fragment;
}
