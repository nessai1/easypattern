<?php

namespace Verevkin\EasyPattern\Manager\Interfaces;

use Verevkin\EasyPattern\Template;

interface TemplateManager
{

	/**
	 * Build and get template object from file with name <b>$templateName</b>
	 * <br>
	 * <br>
	 * Full path of template file determine from combination of <b>manager settings</b> and <b>$templateName</b>
	 *
	 * @param string $templateName
	 * @param array $params
	 * @return Template\Interfaces\Template
	 */
	public function getTemplateByName(string $templateName, array $params): Template\Interfaces\Template;

	/**
	 * Build and get template object from file with path <b>$templatePath<b>
	 *
	 * @param string $templatePath
	 * @param array $params
	 * @return Template\Interfaces\Template
	 */
	public function getTemplateByPath(string $templatePath, array $params): Template\Interfaces\Template;

	/**
	 * Get a current set of settings of manager
	 *
	 * @return ManagerSettingsContainer
	 */
	public function getManagerSettingsContainer(): ManagerSettingsContainer;

	/**
	 * Set a set of settings that represent work of manager
	 *
	 * @param ManagerSettingsContainer $settingsContainer
	 * @return void
	 */
	public function setManagerSettingsContainer(ManagerSettingsContainer $settingsContainer): void;
}