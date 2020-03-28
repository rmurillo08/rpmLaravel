<?php

namespace App\Http\Controllers;

use App\Users\Contact;
use Illuminate\Http\Request;

class ContactController
{
    public function create($request): void
    {
        for ($i = 1; $i < 6; $i++) {
            $key = 'authorized' . $i . 'FirstName';
            $lastName = 'authorized' . $i . 'LastName';
            if (isset($request[$key]) && !empty($request[$key])) {
                $users[] = [
                    'FirstName' => $request[$key],
                    'LastName' => $request[$lastName],
                ];
            }
        }
        $this->createQuery($users ?? [], $request['accountNumber']);
    }

    public function createQuery($users, $accountNumber): void
    {
        foreach ($users as $user) {
            $authorizedUser = (new Contact());
            $authorizedUser->AccountNumber = $accountNumber;
            $authorizedUser->FirstName = $user['firstName'];
            $authorizedUser->LastName = $user['lastName'];
            $authorizedUser->save();
        }
    }

    public function get($accountNumber): array
    {
        $users = \DB::table('contact As au')
            ->select('au.AccountNumber', 'au.FirstName', 'au.LastName')
            ->where('au.AccountNumber', '=', $accountNumber)
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
                $first => $user->FirstName,
                $last => $user->LastName,
                'phoneNumber' => $user-> PrimaryPhoneNumber ?? ''
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
        $fisrtName = '';
        $lastName = '';
        \DB::table('contact')
            ->where('id', $data['id'])
            ->update(['FirstName' => $fisrtName, 'LastName' => $lastName, 'PrimaryPhoneNumber' => $data['phoneNumber']]);
    }
}
