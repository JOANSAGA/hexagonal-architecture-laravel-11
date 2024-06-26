<?php

namespace App\User\Infrastructure\Persistence\Models;

use Illuminate\Database\Eloquent\Model;

class EloquentUser extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email'];
}
