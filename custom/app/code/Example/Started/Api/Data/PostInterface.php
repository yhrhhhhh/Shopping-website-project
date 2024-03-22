<?php

namespace Example\Started\Api\Data;

interface PostInterface
{
    public function getName(): string;

    public function getPostId(): int;

    public function getUrlKey(): string;
}