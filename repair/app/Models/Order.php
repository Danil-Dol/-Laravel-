<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $fillable = [
        'date',
        'time',
        'type',
        'payment',
        'adress',
        'status_id',
        'user_id'
    ];

    protected $casts = [
        'date' => 'date'
    ];

    public function user()
    {
        return $this -> belongsTo(User::class);
    }
    public function status()
    {
        return $this -> belongsTo(Status::class);
    }
}
