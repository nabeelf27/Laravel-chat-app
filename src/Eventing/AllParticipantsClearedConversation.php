<?php

namespace nabeelfarooqi\Chat\Eventing;

use nabeelfarooqi\Chat\Models\Conversation;

class AllParticipantsClearedConversation
{
    public $conversation;

    public function __construct(Conversation $conversation)
    {
        $this->conversation = $conversation;
    }
}
