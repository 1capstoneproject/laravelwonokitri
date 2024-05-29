<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_code', 'order_date', 'tourism_id', 'status',
        'user_id', 'payment', 'visit_date'
    ];

    protected $casts = [
        'payment' => 'array',
    ];

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function tourism()
    {
        return $this->belongsTo(Tourism::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
