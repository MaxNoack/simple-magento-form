<?php
namespace Crealevant\NameSaver\Model\ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ResourceModel extends AbstractDb {
    protected function _construct() {
        $this->_init('name_saver', 'id');
    }
}
