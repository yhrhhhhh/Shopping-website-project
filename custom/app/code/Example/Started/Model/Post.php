<?php

namespace Example\Started\Model;

use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Example\Started\Model\ResourceModel\Post');
    }
}
