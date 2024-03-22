<?php

namespace Example\Started\Model;

use Magento\Framework\Model\AbstractModel;

class GetStarted extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Example\Started\Model\ResourceModel\GetStarted');
    }

    public function getId()
    {
        return $this->_getData('id');
    }

    public function getName()
    {
        return $this->_getData('name');
    }

    public function setName($name)
    {
        return $this->setData('name', $name);
    }

    // 其他操作方法...
}
