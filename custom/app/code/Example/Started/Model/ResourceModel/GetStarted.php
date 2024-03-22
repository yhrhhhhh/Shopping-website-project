<?php

namespace Example\Started\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class GetStarted extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('get_started', 'id'); // 'get_started' 为数据库表名，'id' 为主键字段名
    }

    // 其他操作方法...
}
