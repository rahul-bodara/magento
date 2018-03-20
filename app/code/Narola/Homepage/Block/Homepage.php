<?php
namespace Narola\Homepage\Block;
class Homepage extends \Magento\Framework\View\Element\Template
{    
    protected $_productCollectionFactory;

    protected $_scopeConfig;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,        
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,        
        array $data = []
    )
    {    
        $this->_productCollectionFactory = $productCollectionFactory;    
        parent::__construct($context, $data);
        $this->_scopeConfig = $scopeConfig;
    }
    
    public function getProductCollection()
    {
         $collection = $this->_productCollectionFactory->create();
         $collection = $collection->addAttributeToSelect('*');
         $collection->setPageSize($this->getCountConfig());
        return $collection;
    }

    public function getGeneralConfig(){     
        $getgeneralconfig = $this->_scopeConfig->getValue('productfeed/general/enable', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $getgeneralconfig;
    }

    public function getCountConfig(){     
        $getcountconfig = $this->_scopeConfig->getValue('productfeed/general/count', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $getcountconfig;
    }

    public function getSlider0Config(){     
        $getsliderconfig = $this->_scopeConfig->getValue('productfeed/general/slider_0', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $getsliderconfig;
    }

    public function getSlider320Config(){     
        $getsliderconfig = $this->_scopeConfig->getValue('productfeed/general/slider_320', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $getsliderconfig;
    }

    public function getSlider480Config(){     
        $getsliderconfig = $this->_scopeConfig->getValue('productfeed/general/slider_480', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $getsliderconfig;
    }

    public function getSlider768Config(){     
        $getsliderconfig = $this->_scopeConfig->getValue('productfeed/general/slider_768', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $getsliderconfig;
    }

    public function getSlider960Config(){     
        $getsliderconfig = $this->_scopeConfig->getValue('productfeed/general/slider_960', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $getsliderconfig;
    }

    public function getSlider1280Config(){     
        $getsliderconfig = $this->_scopeConfig->getValue('productfeed/general/slider_1280', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
        return $getsliderconfig;
    }    
}
?>