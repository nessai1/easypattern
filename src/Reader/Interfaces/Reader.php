<?php

namespace Verevkin\EasyPattern\Reader\Interfaces;

interface Reader
{
	/**
	 * Read and return resource by his <b>$resourceId</b> and <b>$additionalParams</b>
	 *
	 * @param string $resourceId
	 * @param array $additionalParams
	 * @return Resource
	 */
	public static function readResource(string $resourceId, array $additionalParams  = []): Resource;
}