<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Merchant extends Authenticatable
{
    use Notifiable;

    protected $guarded = [];

}
