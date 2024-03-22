<?php

namespace Example\Started\Controller\Model;

use Example\Started\Api\GetStartedInterface;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultInterface;

class GetStarted implements HttpGetActionInterface
{
    private JsonFactory $jsonFactory;
    private GetStartedInterface $getStarted;

    public function __construct(JsonFactory $jsonFactory, GetStartedInterface $getStarted)
    {
        $this->jsonFactory = $jsonFactory;
        $this->getStarted = $getStarted;
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
        $records = $this->getStarted->getAllRecords();

        $res = [];
        /** @var \Example\Started\Model\Post $record */
        foreach ($records as $record) {
            $res[] = $record->toArray();
        }

        $result = ['res' => $res, 'arr' => $this->getStarted->getAllRecordsArray()];

        return $this->jsonFactory->create()->setData($result);
    }
}
