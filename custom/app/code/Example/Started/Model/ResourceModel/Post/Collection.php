<?php

namespace Example\Started\Model\ResourceModel\Post;

use Example\Started\Api\GetStartedInterface;
use Example\Started\Model\Post;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection implements GetStartedInterface
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(Post::class, \Example\Started\Model\ResourceModel\Post::class);
    }

    /**
     * @inheritDoc
     */
    public function getAllRecords()
    {
        return $this->getItems();
    }

    /**
     * @inheritDoc
     */
    public function getAllRecordsArray()
    {
        return $this->toArray();
    }
}