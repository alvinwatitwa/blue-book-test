<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasUuids;
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'status_id',
        'priority_id',
        'user_id'
    ];
}
