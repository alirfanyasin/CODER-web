<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPresence extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function presence()
    {
        return $this->belongsTo(Presence::class, 'presence_id');
    }

    /**
     * Get all of the comments for the UserPresence
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function point()
    {
        return $this->hasMany(Point::class, 'user_presence_id');
    }
}
