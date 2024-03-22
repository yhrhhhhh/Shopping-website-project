<?php

namespace Example\Started\Model;

use Magento\Framework\Model\AbstractModel;
use Example\Started\Model\ResourceModel\Post as PostResourceModel;

class Post extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(PostResourceModel::class);
    }
}
