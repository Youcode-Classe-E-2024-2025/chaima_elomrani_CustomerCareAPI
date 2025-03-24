<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responces extends Model
{
    protected $table = 'responces';

    protected $fillable = [
        'user_id',
        'ticket_id',
        'message',
    ];
}
