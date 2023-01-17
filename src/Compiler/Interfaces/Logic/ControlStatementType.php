<?php

namespace Verevkin\EasyPattern\Compiler\Interfaces\Logic;

/**
 * Enum that describes type of control statement
 * @see Parser
 */
enum ControlStatementType
{
	case TYPE_TEXT;
	case TYPE_FOREACH;
	case TYPE_FOR;
	case TYPE_IF;
	case TYPE_SWITCH;
	// TODO: add inline template support
}