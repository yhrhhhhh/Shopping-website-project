<?php

namespace Example\Started\Api;

interface RecordListInterface
{
    /**
     * Retrieve all records from get_started table
     *
     * @return mixed
     */
    public function getAllRecords();

    /**
     * @return array[]|array
     */
    public function getAllRecordsArray();
}
