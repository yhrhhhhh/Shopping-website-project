<?php

namespace Example\Started\Block;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;

class CategoryList extends Template
{
    protected CollectionFactory $categoryCollectionFactory;

    protected $_template = 'category_list.phtml';

    public function __construct(Context $context, CollectionFactory $categoryCollectionFactory, array $data = [])
    {
        $this->categoryCollectionFactory = $categoryCollectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @throws LocalizedException
     */
    public function getCategoryCollection()
    {
        $collection = $this->categoryCollectionFactory->create();

        $collection->addAttributeToSelect('*')
            ->setPageSize(20)
            ->load();

        return $collection;
    }
}
