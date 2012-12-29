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

class Clockworkgeek_CalendarView_Block_Html_Date extends Mage_Core_Block_Html_Date
{

	protected function _toHtml()
	{
		$html  = '<input type="text" name="' . $this->getName() . '" id="' . $this->getId() . '" ';
		$html .= 'value="'.$this->getValue().'" class="'.$this->getClass().'" '.$this->getExtraParams().'/> ';

		$html .= '<img src="' . $this->getImage() . '" alt="' . $this->helper('core')->__('Select Date') . '" class="v-middle" ';
		$html .= 'title="' . $this->helper('core')->__('Select Date') . '" id="' . $this->getId() . '_trig" />';

		$helper = Mage::helper('calendarview');
		$script = "Calendar.setup({dateField: '{$this->getId()}', triggerElement: '{$this->getId()}_trig', dateFormat: '{$helper->getDateFieldsOrder()}'});";
		$html .= Mage::helper('core/js')->getScript($script);

		return $html;
	}

}

