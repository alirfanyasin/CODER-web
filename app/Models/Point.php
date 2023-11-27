<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Point extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * Get the user that owns the Point
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get the user_presence that owns the Point
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userPresence()
    {
        return $this->belongsTo(UserPresence::class, 'user_presence_id');
    }
}
