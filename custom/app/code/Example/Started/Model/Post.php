<?php

namespace Example\Started\Model;

use Example\Started\Api\Data\PostInterface;
use Magento\Framework\Model\AbstractModel;
use Example\Started\Model\ResourceModel\Post as PostResourceModel;

/**
 *  __call() 魔術方法實現了該 PostInterface
 */
class Post extends AbstractModel implements PostInterface
{
    protected function _construct()
    {
        $this->_init(PostResourceModel::class);
    }
}
