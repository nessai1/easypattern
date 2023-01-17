<?php

namespace Verevkin\EasyPattern\Base\Interfaces;

/**
 * Container compatible with PSR-11
 */
interface Container
{
	/**
	 * Get value of container with name <b>$id</b>
	 *
	 * @param string $id
	 * @return mixed
	 */
	public function get(string $id): mixed;

	/**
	 * Set value equals <b>$value</b> for parameter <b>$id</b> of container
	 *
	 * @param string $id
	 * @param mixed $value
	 * @return void
	 */
	public function set(string $id, mixed $value): void;

	/**
	 * Check parameter with name <b>$id</b> for existing in container
	 * @param string $id
	 * @return bool
	 */
	public function has(string $id): bool;
}