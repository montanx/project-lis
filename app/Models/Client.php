<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'dui',
        'birthdate',
        'user_id'
    ];

    public function hasUser(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
