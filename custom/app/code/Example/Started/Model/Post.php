<?php

namespace Example\Started\Model;

use Example\Started\Api\Data\PostInterface;
use Magento\Framework\Model\AbstractModel;
use Example\Started\Model\ResourceModel\Post as PostResourceModel;

class Post extends AbstractModel implements PostInterface
{
    protected function _construct()
    {
        $this->_init(PostResourceModel::class);
    }

    public function getName(): string
    {
        return $this->getData('name');
    }

    public function getUrlKey(): string
    {
        return $this->getData('url_key');
    }

    public function getPostId(): int
    {
        return $this->getData('post_id');
    }
}
