<?php
namespace Crealevant\NameSaver\Controller\Index;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\App\Action;

class NameSaver extends Action\Action
{
    public function __construct(Action\Context $context)
    {
        parent::__construct($context);
    }

    public function execute() {
        $post = (array) $this->getRequest()->getPostValue();
        if (!empty($post)) {
            try {
                $firstname = $this->sanitize_input($post['firstname']);
                $lastname = $this->sanitize_input($post['lastname']);

                if (empty($firstname) || empty($lastname)) {
                    throw new \Exception('Invalid fields');
                }

                $model = $this->_objectManager->create('Crealevant\NameSaver\Model\Model');
                $model->setData('firstname', $firstname);
                $model->setData('lastname', $lastname);
                $model->save();

                $this->messageManager->addSuccessMessage('Name saved');

                $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
                $resultRedirect->setUrl('/Magento/namesaver/index/namesaver');

                return $resultRedirect;

            } catch (\Exception $e) {
                if(!empty($e->getMessage())) {
                    $this->messageManager->addError(
                        $e->getMessage()
                    );
                } else {
                    $this->messageManager->addError(
                        __('Something went wrong. Please try again.')
                    );
                }
                $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
                $resultRedirect->setUrl('/Magento/namesaver/index/namesaver');

                return $resultRedirect;
            }
        }

        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }

    private function sanitize_input($input) {
        return trim(filter_var($input, FILTER_SANITIZE_STRING));
    }
}
