<?php

namespace Example\Started\Controller\Index;

use Example\Started\Model\PostFactory;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Index implements HttpGetActionInterface
{
    protected JsonFactory $jsonFactory;

    protected PostFactory $postFactory;

    public function __construct(Context $context, JsonFactory $jsonFactory, PostFactory $postFactory)
    {
        $this->jsonFactory = $jsonFactory;
        $this->postFactory = $postFactory;
    }

    public function execute()
    {
        $post = $this->postFactory->create();
        $collection = $post->getCollection();

        $res = [];
        /** @var \Example\Started\Model\Post $item */
        foreach ($collection as $item) {
            $res[] = $item->toArray();
        }

        return $this->jsonFactory->create()->setData($res);
    }
}