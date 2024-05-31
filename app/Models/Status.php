<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'id',
        'code',
        'name'
    ];

    public function todos()
    {
        return $this->hasMany(Todo::class, 'status_id');
    }
}