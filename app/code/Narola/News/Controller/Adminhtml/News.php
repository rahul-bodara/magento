<?php

namespace Narola\News\Controller\Adminhtml;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Narola\News\Model\NewsFactory;

class News extends Action
{
    
    protected $_coreRegistry;

   
    protected $_resultPageFactory;

    
    protected $_newsFactory;

     
    public function __construct(
        Context $context,
        Registry $coreRegistry,
        PageFactory $resultPageFactory,
        NewsFactory $newsFactory
    ) {
       parent::__construct($context);
        $this->_coreRegistry = $coreRegistry;
        $this->_resultPageFactory = $resultPageFactory;
        $this->_newsFactory = $newsFactory;
    }

    /**
     * News access rights checking
     *
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Narola_News::manage_news');
    }
}