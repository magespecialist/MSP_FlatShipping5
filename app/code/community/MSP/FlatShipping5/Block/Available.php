<?php
/**
 * IDEALIAGroup srl
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@idealiagroup.com so we can send you a copy immediately.
 *
 * @category    MSP
 * @package     MSP_FlatShipping5
 * @copyright   Copyright (c) 2010-2014 IDEALIAGroup srl (http://www.idealiagroup.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class MSP_FlatShipping5_Block_Available extends Mage_Checkout_Block_Onepage_Shipping_Method_Available
{
	protected function getInfoText($carrierCode)
	{
		if ($text = Mage::getStoreConfig('carriers/'.$carrierCode.'/infotext')) {
            return $text;
        }
        return '';
	}
}
