<?php

namespace Verevkin\EasyPattern\Compiler\Interfaces\Context;

interface Context
{
	public function addVariable(string $key, ContextValue $value): void;

	public function deleteVariable(string $key): void;
	public function eraseVariableContext(string $key, int $contextId): void;
	public function getVariable(string $key, int $contextId): mixed;
}