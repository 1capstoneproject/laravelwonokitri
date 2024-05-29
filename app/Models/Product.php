<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'tourism_id', 'name', 'description', 'rating', 'price',
        'status', 'image', 'images', 'sold'
    ];

    protected $casts = [
        'images' => 'array',
    ];

    public function tourism()
    {
        return $this->belongsTo(Tourism::class);
    }
}
