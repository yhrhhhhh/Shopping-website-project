<?php

namespace Example\Started\Controller\Query;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ResourceConnection;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\DB\Adapter\AdapterInterface;
use Throwable;

class Raw implements HttpGetActionInterface
{
    private AdapterInterface $connection;
    private JsonFactory $jsonFactory;

    public function __construct(ResourceConnection $connection, JsonFactory $jsonFactory)
    {
        $this->connection = $connection->getConnection();
        $this->jsonFactory = $jsonFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResultInterface
     */
    public function execute(): ResultInterface
    {
        try {
            $select = $this->connection->select()
                ->from('catalog_category_entity')
                ->columns(['entity_id', 'path'])
                ->order('entity_id DESC')
                ->limitPage(1, 20);

            $result = $this->connection->fetchAll($select);
            return $this->jsonFactory->create()->setData($result);
        } catch (Throwable $e) {
            // Handle exception here, for example log or return error response
            return $this->jsonFactory->create()->setData(['error' => $e->getMessage()]);
        }
    }
}
