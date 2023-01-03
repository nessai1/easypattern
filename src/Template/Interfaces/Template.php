<?php

namespace Verevkin\EasyPattern\Template\Interfaces;

interface Template
{
	/**
	 * Get rendered text of template with computed parameters
	 *
	 * @return string
	 */
	public function getRenderedTemplate(): string;

	/**
	 * Get name of template
	 *
	 * @return string
	 */
	public function getName(): string;

	/**
	 * Get container of computed params for template
	 *
	 * @return TemplateParamsContainer
	 */
	public function getParamsContainer(): TemplateParamsContainer;
}