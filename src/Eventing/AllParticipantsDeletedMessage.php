<?php

namespace nabeelfarooqi\Chat\Eventing;

use nabeelfarooqi\Chat\Models\Message;

class AllParticipantsDeletedMessage extends Event
{
    public $message;

    public function __construct(Message $message)
    {
        $this->message = $message;
    }
}
