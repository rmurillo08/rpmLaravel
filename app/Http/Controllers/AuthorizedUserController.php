<?php

namespace App\Http\Controllers;

use App\Users\AutorizedUsers;
use Illuminate\Http\Request;

class AuthorizedUserController
{
    public function create($request, $userId): void
    {
        for ($i = 1; $i < 6; $i++) {
            $key = 'authorized' . $i . 'FirstName';
            $lastName = 'authorized' . $i . 'LastName';
            if (isset($request[$key]) && !empty($request[$key])) {
                $users[] = [
                    'firstName' => $request[$key],
                    'lastName' => $request[$lastName],
                ];
            }
        }
        $this->createQuery($users ?? [], $userId);
    }

    public function createQuery($users, $userId): void
    {
        foreach ($users as $user) {
            $authorizedUser = (new AutorizedUsers());
            $authorizedUser->user_id = $userId;
            $authorizedUser->first_name = $user['firstName'];
            $authorizedUser->last_name = $user['lastName'];
            $authorizedUser->save();
        }
    }

    public function get($userId): array
    {
        $users = \DB::table('authorized_users As au')
            ->leftJoin('users AS u', 'au.user_id', '=', 'u.id')
            ->select('au.first_name', 'au.last_name')
            ->where('au.user_id', '=', $userId)
            ->get();
        return $this->formatUsers($users);
    }

    private function formatUsers($users): array
    {
        $i = 1;
        foreach ($users as $user) {
            $first = 'authorized' . $i . 'FirstName';
            $last = 'authorized' . $i . 'LastName';
            $authorizedUsers[] = [
                $first => $user->first_name,
                $last => $user->last_name
            ];
            $i++;
        }
        return $authorizedUsers ?? [];
    }

    public function update(Request $request)
    {
        info('this is the data that we getting in the new routes auth user:: ', [$request]);
    }

    private function updateQuery($data)
    {
        \DB::table('autorized_users')
            ->where('id', $data['id'])
            ->update(['name' => $data['name'], 'phoneNumber' => $data['phoneNumber']]);
    }
}
