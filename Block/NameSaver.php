<?php
namespace Crealevant\NameSaver\Block;
use Magento\Framework\View\Element\Template;

class NameSaver extends Template {
    public function getFormAction()
    {
        return '/Magento/namesaver/index/namesaver';
    }
}