<?php

namespace Verevkin\EasyPattern\Compiler\Interfaces\Context;

interface ContextValue
{
	public function __construct(int $contextId, mixed $value);
	public function getContextId(): int;
	public function getValue(): mixed;
}