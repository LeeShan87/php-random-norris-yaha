<?php

namespace App\Service;

use App\Dto\MessageResult;

class MessageProvider
{

    public function messages(): array
    {
        return [
            new MessageResult(source: ' jsonplaceholder/1', messageId: 10, message: 'quo et expedita modi cum officia vel magni\ndoloribus qui repudiandae\nvero nisi sit\nquos veniam quod sed accusamus veritatis error')
        ];
    }
}
