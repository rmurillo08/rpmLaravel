<?php

namespace App\Users;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Profile extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'user_id', 'id_type', 'id_number', 'delivery_country', 'primary_telephone', 'secondary_telephone', 'primary_address',
        'secondary_address', 'city', 'country', 'heard', 'delivery', 'pick_up'
    ];
}

