<?php

namespace Verevkin\EasyPattern\Template;

use \Verevkin\EasyPattern\Template\Interfaces;

class TemplateParamsContainer implements Interfaces\TemplateParamsContainer
{
	protected array $params;

	public function __construct(array $params = [])
	{
		$this->params = $params;
	}

	public function get(string $id): mixed
	{
		if ($this->has($id))
		{
			return $this->params[$id];
		}

		return null;
	}

	public function set(string $id, mixed $value): void
	{
		$this->params[$id] = $value;
	}

	public function has(string $id): bool
	{
		return isset($this->params[$id]);
	}
}