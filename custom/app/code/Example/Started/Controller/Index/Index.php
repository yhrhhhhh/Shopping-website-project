<?php

namespace Example\Started\Controller\Index;

use Example\Started\Model\GetStartedFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Index implements HttpGetActionInterface
{
    protected JsonFactory $jsonFactory;

    protected GetStartedFactory $getStartedFactory;

    public function __construct(Context $context, JsonFactory $jsonFactory, GetStartedFactory $getStartedFactory)
    {
        $this->jsonFactory = $jsonFactory;
        $this->getStartedFactory = $getStartedFactory;
    }

    public function execute()
    {
        $post = $this->getStartedFactory->create();
        $collection = $post->getCollection();

        $res = [];
        /** @var \Example\Started\Model\GetStarted $item */
        foreach ($collection as $item) {
            $res[] = $item->toArray();
        }

        return $this->jsonFactory->create()->setData($res);
    }
}