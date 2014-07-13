<?php
/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 *
 * @category   Design
 * @package    Clockworkgeek_CalendarView
 * @author     Daniel Deady <daniel@clockworkgeek.com>
 * @copyright  Copyright (c) 2010, Daniel Deady
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Clockworkgeek_CalendarView_Helper_Data extends Mage_Core_Helper_Data
{

	/**
	 * Retrieve just the language part and not the country part
	 */
	public function getLocaleLanguageCode()
	{
		return substr(Mage::app()->getLocale()->getLocaleCode(), 0, 2);
	}

	public function getDateFieldsOrder()
	{
		$text = Mage::getStoreConfig('catalog/custom_options/date_fields_order');
		$text = str_replace(
					array(',', 'd', 'm', 'y'),
					array('/', '%d', '%m', '%Y'),
					$text);
		return $text;
	}

}

