<?php
namespace MageDeveloper\Magelink\ViewHelpers\Magento;

	/***************************************************************
	 *  Copyright notice
	 *
	 *  (c) 2013
	 *  All rights reserved
	 *
	 *  This script is part of the TYPO3 project. The TYPO3 project is
	 *  free software; you can redistribute it and/or modify
	 *  it under the terms of the GNU General Public License as published by
	 *  the Free Software Foundation; either version 3 of the License, or
	 *  (at your option) any later version.
	 *
	 *  The GNU General Public License can be found at
	 *  http://www.gnu.org/copyleft/gpl.html.
	 *
	 *  This script is distributed in the hope that it will be useful,
	 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
	 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	 *  GNU General Public License for more details.
	 *
	 *  This copyright notice MUST APPEAR in all copies of the script!
	 ***************************************************************/

/**
 *
 *
 * @package magelink
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class AbstractMagentoViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
	/**
	 * Magento Core
	 * @var \MageDeveloper\Magelink\Magento\Core
	 * @inject
	 */
	protected $magentoCore;

	/**
	 * Magento Helper
	 * @var \MageDeveloper\Magelink\Magento\Helper
	 * @inject
	 */
	protected $magentoHelper;

	/**
	 * Settings Service
	 * @var \MageDeveloper\Magelink\Service\SettingsService
	 * @inject
	 */
	protected $settingsService;
	
	/**
	 * Cache Service
	 * @var \MageDeveloper\Magelink\Service\CacheService
	 * @inject
	 */
	protected $cacheService;
	
	/**
	 * Gets an instance of magento
	 * 
	 * @return \string
	 */
	public function render()
	{
		// Initialize Magento and prepare
		if ($this->magentoCore->init())
		{
			return "Magento loaded!";
		}
		
		return "Magento could not be loaded!";
	}
	
}