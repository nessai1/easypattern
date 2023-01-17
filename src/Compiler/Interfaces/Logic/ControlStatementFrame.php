<?php

namespace Verevkin\EasyPattern\Compiler\Interfaces\Logic;

interface ControlStatementFrame
{
	public function getStatementType(): ControlStatementType;
	public function getStatementContent(): string;
}