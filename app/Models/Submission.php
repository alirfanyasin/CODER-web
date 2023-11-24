<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;
    // protected $guarded = ['id'];
    protected $fillable = ['user_id', 'task_id', 'submission', 'point', 'created_at'];

    public function isSubmitted()
    {
        return $this->created_at !== null;
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
