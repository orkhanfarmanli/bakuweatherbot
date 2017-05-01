<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Weather extends Model
{
    use Notifiable;

    protected $table = 'weather';
}
