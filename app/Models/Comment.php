<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reply',
        'post_id',
    ];
    
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
