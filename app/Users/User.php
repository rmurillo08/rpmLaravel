<?php

namespace App\Users;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'customer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'FirstName', 'LastName', 'EmailAddress', 'PasswordHash', 'DateOfBirth', 'AccountNumber', 'AddressLine1',
        'AddressLatitude', 'AddressLongitude', 'AdressLine2', 'City', 'Country', 'What3WordsString', 'PrimaryPhoneNumber',
        'AlternatePhoneNumber', 'CompanyName', 'AccountTypeId', 'RouteId', 'IdentificationType', 'CreditLimit', 'IsSuspended',
        'SuspensionReason', 'HasInsurance', 'AcceptCompanyCheques', 'IsCreditCardCustomer', 'IsOnlinePurchaseTaxExempted',
        'IsEnabled', 'IsApproved', 'NeedsVerification', 'IsAccountFlagged', 'AccountFlaggedReason', 'AccountFlaggedDate',
        'FlaggedBy', 'RewardPoints', 'RewardCardNumber', 'CreationSource', 'LastActive', 'LastUpdateSource'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'PasswordHash',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
