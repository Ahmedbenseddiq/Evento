<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "user_id",
    ];

    public function event()
    {
        return $this->hasMany(event::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
