<?php

namespace Example\Started\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Post extends AbstractDb
{
    protected function _construct()
    {
        /** @see \Example\Started\Setup\UpgradeSchema::createPostTable */
        $this->_init('post', 'post_id');
    }
}
