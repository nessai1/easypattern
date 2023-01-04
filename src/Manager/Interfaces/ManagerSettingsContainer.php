<?php

namespace Verevkin\EasyPattern\Manager\Interfaces;

/**
 * Container of manager settings compatible with PSR-11
 */
interface ManagerSettingsContainer
{
	/**
	 * Get setting with name <b>$id</b>
	 *
	 * @param string $id
	 * @return mixed
	 */
	public function get(string $id): mixed;

	/**
	 * Set value equals <b>$value</b> for setting <b>$id</b> of manager
	 *
	 * @param string $id
	 * @param mixed $value
	 * @return void
	 */
	public function set(string $id, mixed $value): void;

	/**
	 * Check setting with name <b>$id</b> for existing
	 * @param string $id
	 * @return bool
	 */
	public function has(string $id): bool;
}