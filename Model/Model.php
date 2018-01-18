<?php
namespace Crealevant\NameSaver\Model;
use Magento\Framework\Model\AbstractModel;

class Model extends AbstractModel {
    protected function _construct() {
        $this->_init('Crealevant\NameSaver\Model\ResourceModel\ResourceModel');
    }
}
