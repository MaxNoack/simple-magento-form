<?php
namespace Crealevant\NameSaver\Controller\Adminhtml\Index;
use Magento\Backend\App\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action {
    protected $resultPageFactory = false;

    public function __construct(Action\Context $context, PageFactory $resultPageFactory) {
         parent::__construct($context);
         $this->resultPageFactory = $resultPageFactory;
    }

    public function execute() {
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
    }
}
