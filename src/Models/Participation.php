<?php

namespace nabeelfarooqi\Chat\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Illuminate\Database\Eloquent\SoftDeletes;
use nabeelfarooqi\Chat\BaseModel;
use nabeelfarooqi\Chat\ConfigurationManager;

class Participation extends BaseModel
{
//    use SoftDeletes;

    protected $table = ConfigurationManager::PARTICIPATION_TABLE;
    protected $fillable = [
        'conversation_id',
        'settings',
    ];

    protected $casts = [
        'settings' => 'array',
    ];

    /**
     * Conversation.
     *
     * @return BelongsTo
     */
    public function conversation()
    {
        return $this->belongsTo(Conversation::class, 'conversation_id');
    }

    public function messageable()
    {
        return $this->morphTo()->with('participation');
    }
}
