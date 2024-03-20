<?php

namespace Example\Started\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\App\ResourceConnection;

class RawQuery extends Template
{
    protected $connection;

    protected $_template = 'raw_query.phtml';

    public function __construct(
        Template\Context $context,
        ResourceConnection $resource,
        array $data = []
    ) {
        $this->connection = $resource->getConnection();
        parent::__construct($context, $data);
    }

    public function getQueryResults()
    {
        $select = $this->connection->select()
            ->from('catalog_category_entity')
            ->columns(['entity_id', 'path'])
            ->order('entity_id DESC')
            ->limit(20);

        return $this->connection->fetchAll($select);
    }
}
