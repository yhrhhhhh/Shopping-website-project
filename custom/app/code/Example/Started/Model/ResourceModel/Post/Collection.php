<?php

namespace Example\Started\Model\ResourceModel\Post;

use Example\Started\Api\RecordListInterface;
use Example\Started\Model\Post;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Example\Started\Model\ResourceModel\Post as PostResourceModel;

class Collection extends AbstractCollection implements RecordListInterface
{
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(Post::class, PostResourceModel::class);
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