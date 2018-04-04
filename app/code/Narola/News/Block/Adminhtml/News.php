<?php

namespace Narola\News\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container;

class News extends Container
{
   /**
     * Constructor
     *
     * @return void
     */
   protected function _construct()
    {
        $this->_controller = 'adminhtml_news';
        $this->_blockGroup = 'Narola_News';
        $this->_headerText = __('Manage News');
        $this->_addButtonLabel = __('Add News');
        parent::_construct();
    }
}