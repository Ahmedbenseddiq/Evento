<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "description",
        "date",
        "place",
        "seats_number",
        "category_id",
        "user_id",
    ];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
}
