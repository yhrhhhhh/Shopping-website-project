<?php
namespace Example\Started\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'get_started';

    protected $_cacheTag = 'get_started';

    protected $_eventPrefix = 'get_started';

    protected function _construct()
    {
        $this->_init('Example\Started\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}