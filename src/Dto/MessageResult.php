<?php

namespace App\Dto;

class MessageResult
{
    public function __construct(
        public readonly string $source,
        public readonly string $messageId,
        public readonly string $message
    ) {}
}
