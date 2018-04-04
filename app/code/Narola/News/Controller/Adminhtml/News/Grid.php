<?php

namespace Narola\News\Controller\Adminhtml\News;

use Narola\News\Controller\Adminhtml\News;

class Grid extends News
{
   /**
     * @return void
     */
   public function execute()
   {
      return $this->_resultPageFactory->create();
   }
}
