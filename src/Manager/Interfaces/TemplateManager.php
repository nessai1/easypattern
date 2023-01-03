<?php

namespace Verevkin\EasyPattern\Manager\Interfaces;

use Verevkin\EasyPattern\Template;

interface TemplateManager
{
	public function getTemplateByName(string $templateName, array $params): Template\Interfaces\Template;

	public function getTemplateByPath(string $templatePath, array $array): Template\Interfaces\Template;
}