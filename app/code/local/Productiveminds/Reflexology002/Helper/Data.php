<?php

class Productiveminds_Reflexology002_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function isModuleActive($moduleName = null,$enabledLocation=null) {
		if ($moduleName === null) {
			$moduleName = $this->_getModuleName();
		}
		if (!Mage::getConfig()->getNode('modules/' . $moduleName)) {
			return false;
		}
		$isActive = Mage::getConfig()->getNode('modules/' . $moduleName . '/active');
		$test = (string)$isActive;
		if (!$isActive || !in_array((string)$isActive, array('true', '1'))) {
			return false;
		}
		if ($enabledLocation === null) {
			return true;
		}
		if (!Mage::getStoreConfig($enabledLocation)) {
			return false;
		}
		return true;
	}
	
	
    public function getContactsUrl()
    {
        return Mage::getUrl('contacts');
    }
}
