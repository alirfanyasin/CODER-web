<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meet extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = ['topic', 'meeting', 'start_time', 'end_time', 'status', 'link', 'type'];

    /**
     * Get the division that owns the module.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }
}
