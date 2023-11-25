<?php

namespace App\Models\Admin;

use App\Models\Presence;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    /**
     * Get the user that owns the Division
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function module()
    {
        return $this->hasMany(Module::class, 'division_id');
    }
    /**
     * Get the user that owns the Division
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function task()
    {
        return $this->hasMany(Task::class, 'division_id');
    }
    /**
     * Get the division that owns the module.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->hasMany(User::class);
    }

    /**
     * Get the user that owns the Division
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function presence()
    {
        return $this->hasMany(Presence::class, 'division_id');
    }
}
