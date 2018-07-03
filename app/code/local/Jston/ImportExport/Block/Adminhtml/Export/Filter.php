<?php

class Jston_ImportExport_Block_Adminhtml_Export_Filter extends Mage_ImportExport_Block_Adminhtml_Export_Filter {
    public function getMainButtonsHtml() {
        $html = parent::getMainButtonsHtml();
        $customLinks = $this->getLayout()->createBlock('jston_selectionlinks/adminhtml_links')
            ->setTargetColumn(Mage_ImportExport_Model_Export::FILTER_ELEMENT_SKIP)->_toHtml();
        return $customLinks . $html;
    }
}
