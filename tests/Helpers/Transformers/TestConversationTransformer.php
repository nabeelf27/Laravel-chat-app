<?php

namespace nabeelfarooqi\Chat\Tests\Helpers\Transformers;

use nabeelfarooqi\Chat\Transformers\Transformer;

class TestConversationTransformer extends Transformer
{
    public function transform($conversation)
    {
        return [
            'id'         => $conversation->id,
            'private'    => $conversation->private,
            'data'       => $conversation->data,
            'created_at' => $conversation->created_at,
            'updated_at' => $conversation->updated_at,
        ];
    }
}
