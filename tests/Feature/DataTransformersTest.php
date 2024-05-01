<?php

namespace nabeelfarooqi\Chat\Tests\Feature;

use nabeelfarooqi\Chat\Models\Conversation;
use nabeelfarooqi\Chat\Tests\Helpers\Transformers\TestConversationTransformer;
use nabeelfarooqi\Chat\Tests\TestCase;

class DataTransformersTest extends TestCase
{
    public function testConversationWithoutTransformer()
    {
        $conversation = factory(Conversation::class)->create();
        $responseWithoutTransformer = $this->getJson(route('conversations.show', $conversation->getKey()))
            ->assertStatus(200);

        $this->assertInstanceOf(Conversation::class, $responseWithoutTransformer->getOriginalContent());
    }

    public function testConversationWithTransformer()
    {
        $conversation = factory(Conversation::class)->create();
        $this->app['config']->set('nabeelfarooqi_chat.transformers.conversation', TestConversationTransformer::class);

        $responseWithTransformer = $this->getJson(route('conversations.show', $conversation->getKey()))
            ->assertStatus(200);

        $this->assertInstanceOf('stdClass', $responseWithTransformer->getOriginalContent());
    }
}
