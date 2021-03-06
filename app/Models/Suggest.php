<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    protected $table = 'suggests';

    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
