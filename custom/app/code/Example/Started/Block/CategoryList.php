<?php

namespace Example\Started\Block;

use Magento\Framework\View\Element\Template;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;

class CategoryList extends Template
{
    protected $categoryCollectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $categoryCollectionFactory,
        array $data = []
    ) {
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getCategoryCollection()
    {
        $collection = $this->categoryCollectionFactory->create();
        $collection->addAttributeToSelect('*') // 可根据需要选择要获取的属性
        ->setPageSize(20) // 获取前 20 条数据
        ->load();

        return $collection;
    }
}
