<?php

namespace Verevkin\EasyPattern\Reader\Interfaces;

interface Resource
{
	/**
	 * Get ID of resource
	 * <br>
	 * <br>
	 * <i>Example: for files it gets filename</i>
	 *
	 * @return string
	 */
	public function getId(): string;

	/**
	 * Get content of resource
	 * <br>
	 * <br>
	 * <i>Example: for files it gets the contents of a file</i>
	 *
	 * @return string
	 */
	public function getContent(): string;
}