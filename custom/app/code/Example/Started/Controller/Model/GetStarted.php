<?php

namespace Example\Started\Controller\Model;

use Example\Started\Api\Data\PostInterface;
use Example\Started\Api\RecordListInterface;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;

class GetStarted implements HttpGetActionInterface
{
    private JsonFactory $jsonFactory;
    private RecordListInterface $recordList;

    public function __construct(JsonFactory $jsonFactory, RecordListInterface $recordList)
    {
        $this->jsonFactory = $jsonFactory;
        $this->recordList = $recordList;
    }

    /**
     * Execute action based on request and return result
     *
     * http://start.kyoye.com/started/model/getStarted
     *
     * @return ResultInterface
     */
    public function execute()
    {
        $records = $this->recordList->getAllRecords();

        $res = [];
        /** @var PostInterface $record */
        foreach ($records as $record) {
            $res[] = $record->getPostId();
        }

        $result = ['res' => $res, 'arr' => $this->recordList->getAllRecordsArray()];

        return $this->jsonFactory->create()->setData($result);
    }
}
