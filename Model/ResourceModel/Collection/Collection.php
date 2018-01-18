<?php
namespace Crealevant\NameSaver\Model\ResourceModel\Collection;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection {
    protected function _construct() {
        $this->_init(
            'Crealevant\NameSaver\Model\Model',
            'Crealevant\NameSaver\Model\ResourceModel\ResourceModel'
        );
    }
}
