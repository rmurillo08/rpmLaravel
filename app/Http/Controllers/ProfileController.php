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
        $profile->delivery_country = $request['delivery_country'];
        $profile->primary_telephone = $request['primary_telephone'];
        $profile->secondary_telephone = $request['secondary_telephone'] ?? '';
        $profile->primary_address = $request['primary_address'];
        $profile->secondary_address = $request['secondary_address'] ?? '';
        $profile->city = $request['city'];
        $profile->country = $request['country'];
        $profile->heard = $request['heard'];
        $profile->delivery = !empty($request['delivery']) ? 1: 0;
        $profile->pick_up = !empty($request['pick_up']) ? 1 : 0;
        $profile->save();
    }

    public function get(): array
    {
        $user = auth()->user();

        $profile = \DB::table('profiles As p')
            ->leftJoin('users AS u', 'p.user_id', '=', 'u.id')
            ->leftJoin('authorized_users AS au', 'au.user_id', '=', 'u.id')
            ->select('u.first_name', 'u.last_name', 'u.email', 'p.id_type', 'p.id_number', 'p.primary_telephone', 'p.secondary_telephone',
                'p.primary_address', 'p.secondary_address', 'p.city', 'p.country', 'p.delivery', 'p.pick_up')
            ->where('p.user_id', '=', $user->id)
            ->first();
        return $this->formatProfile($profile, $user->id);
    }

    public function formatProfile($profile, $userId): array
    {
        return [
            'firstName' => $profile->first_name,
            'lastName' => $profile->last_name,
            'email' => $profile->email,
            'idType' => $profile->id_type,
            'idNumber' => $profile->id_number,
            'primaryPhone' => $profile->primary_telephone,
            'secondaryPhone' => $profile->secondary_telephone,
            'primaryAddress' => $profile->primary_address,
            'secondaryAddress' => $profile->secondary_address,
            'city' => $profile->city,
            'country' => $profile->secondary_address,
            'delivery' => $profile->delivery,
            'pickUp' =>$profile->pick_up,
            'authorizedUsers' =>(new AuthorizedUserController())->get($userId),
        ];
    }
}
