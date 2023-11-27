<?php

namespace App\Models;

use App\Models\Admin\Division;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Presence extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get the division that owns the module.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }


    /**
     * Get all of the comments for the Presence
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function UserPresence()
    {
        return $this->hasMany(UserPresence::class, 'presence_id');
    }
}
