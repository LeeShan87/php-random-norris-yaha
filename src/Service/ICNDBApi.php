<?php

namespace App\Service;

use App\Dto\MessageResult;

class ICNDBApi
{
    public function getMessage(): MessageResult
    {
        return new MessageResult(
            source: 'icndb',
            messageId: '',
            message: 'This is a random message from icndb'
        );
    }
}
