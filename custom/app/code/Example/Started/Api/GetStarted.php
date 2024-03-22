<?php

namespace Example\Started\Api;

use Example\Started\Model\ResourceModel\GetStarted\Collection;

class GetStarted implements GetStartedInterface
{
    protected $collection;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @inheritDoc
     */
    public function getAllRecords()
    {
        return $this->collection->getItems();
    }

    /**
     * @inheritDoc
     */
    public function getAllRecordsArray()
    {
        return $this->collection->toArray();
    }
}
