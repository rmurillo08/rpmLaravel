<?php


namespace App\Users;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Contact extends Authenticatable
{
    use Notifiable;

    protected $table = 'contact';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'AccountNumber', 'FirstName', 'LastName', 'PrimaryPhoneNumber'
    ];
}
