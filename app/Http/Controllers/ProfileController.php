<?php

namespace App\Http\Controllers;

use App\Users\Profile;
use Illuminate\Http\Request;

class ProfileController
{
    public function create(Request $request, $userId)
    {
        $profile = (new Profile());
        $profile->user_id = $userId;
        $profile->id_type = $request['id_type'];
        $profile->id_number = $request['id_number'];

        $profile->primary_telephone = $request['primary_telephone'];
        $profile->secondary_telephone = $request['secondary_telephone'] ?? '';
        $profile->primary_address = $request['primary_address'];
        $profile->secondary_address = $request['secondary_address'] ?? '';
        $profile->city = $request['city'];
        $profile->country = $request['country'];

        $profile->save();
    }

    public function get(): array
    {
        $user = auth()->user();

        $profile = \DB::table('customer As u')
            ->leftJoin('contact AS au', 'au.AccountNumber', '=', 'u.AccountNumber')
            ->select('u.FirstName', 'u.LastName', 'u.EmailAddress', 'u.identificationTyue', 'u.IdentificationNumber',
                'u.PrimaryPhoneNumber', 'u.AlternatePhoneNumber',
                'u.AddressLine1', 'u.AddressLine2', 'u.City', 'u.Country', 'u.IsDelivery', 'u.IsPickUp')
            ->where('u.AccountNumber', '=', $user->AccountNumber)
            ->first();
        return $this->formatProfile($profile, $user->AccountNumber);
    }

    public function formatProfile($profile, $AccountNumber): array
    {
        return [
            'firstName' => $profile->FirstName,
            'lastName' => $profile->LastName,
            'email' => $profile->EmailAddress,
            'idType' => $profile->IdentificationType,
            'idNumber' => $profile->IdentificationNumber,
            'primaryPhone' => $profile->PrimaryPhoneNumber,
            'secondaryPhone' => $profile->AlternatePhoneNumber,
            'primaryAddress' => $profile->AddressLine1,
            'secondaryAddress' => $profile->AddressLine2,
            'city' => $profile->City,
            'country' => $profile->Country,
            'delivery' => $profile->IsDelivery,
            'pickUp' =>$profile->IsPickUp,
            'authorizedUsers' =>(new ContactController())->get($AccountNumber),
        ];
    }
}
