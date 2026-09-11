<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OurTeam extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'occupation',
        'avatar',
        'location',
    ];
}
