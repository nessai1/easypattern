<?php

namespace Verevkin\EasyPattern\Template\Interfaces;

/**
 * Container of template params compatible with PSR-11
 */
interface TemplateParamsContainer
{
	/**
	 * Get value of template parameter with name <b>$id</b>
	 *
	 * @param string $id
	 * @return mixed
	 */
	public function get(string $id): mixed;

	/**
	 * Set value equals <b>$value</b> for parameter <b>$id</b> of template
	 *
	 * @param string $id
	 * @param mixed $value
	 * @return void
	 */
	public function set(string $id, mixed $value): void;

	/**
	 * Check parameter with name <b>$id</b> for existing
	 * @param string $id
	 * @return bool
	 */
	public function has(string $id): bool;
}