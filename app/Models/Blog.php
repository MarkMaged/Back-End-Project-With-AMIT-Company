<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'title',
        'content',
        'user_id',
        'image',
        'price',
    ];
    public function getPriceAttribute($value)
    {
        return $value . "$";
    }
}
