<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auths extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $date = ['created_at'];
    protected $fillable = [
        'name',
        'email',
        'password',
        'date',
        'role'
    ];
}
