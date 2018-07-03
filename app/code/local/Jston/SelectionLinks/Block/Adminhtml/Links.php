<?php

class Jston_SelectionLinks_Block_Adminhtml_Links extends Mage_Core_Block_Template {
    /**
     * Attribute name value in the grid
     *
     * @var string
     */
    protected $_targetColumn;

    public function _construct()
    {
        parent::_construct();
        $this->setTemplate('jston/selectionlinks/links.phtml');
    }

    public function setTargetColumn($targetColumn)
    {
        $this->_targetColumn = $targetColumn;
        return $this;
    }

    public function getTargetColumn()
    {
        return $this->_targetColumn;
    }
}
