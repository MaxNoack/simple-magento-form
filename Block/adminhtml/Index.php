<?php
namespace Crealevant\NameSaver\Block\adminhtml;
use Magento\Backend\Block\Widget\Grid\Container;

class Index extends Container {
    protected function _construct() {
        $this->_controller = 'adminhtml_index';
        $this->_blockGroup = 'Crealevant_NameSaver';
        $this->_headerText = __('Saved names');
        parent::_construct();
        $this->removeButton('add');
    }
}