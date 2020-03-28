<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
   public function get()
   {
       $userId = auth()->user()->id;
       $account = $this->getAccountQuery($userId);
       $accountData = $this->formatAccount($account, $userId);
       return  view('account')->with($accountData);
   }

   private function getAccountQuery($userId)
   {
       return  \DB::table('customer AS u')
           ->join('profiles AS p', 'p.user_id', '=', 'u.id')
           ->select('u.id', 'u.first_name', 'u.last_name', 'u.email', 'p.id_type', 'p.id_number', 'p.primary_telephone',
               'p.secondary_telephone', 'p.primary_address', 'p.secondary_address' , 'p.city', 'p.country', 'p.delivery', 'p.pick_up')
           ->where('u.id', '=', $userId)
           ->first();
   }

   private function formatAccount($account, $userId): array
   {
        return [
            'accountId' => $account->id,
            'name' => (ucwords($account->first_name) . ' ' . ucwords($account->last_name)) ?? 'NA',
            'email' => $account->email ?? 'NA',
            'idType' => $account->id_type ?? 'NA',
            'idNumber' => $account->id_number ?? 'NA',
            'primaryTelephone' => $account->primary_telephone ?? 'NA',
            'secondaryTelephone' => !empty($account->secondary_telephone) ? $account->secondary_telephone : 'NA',
            'primaryAddress' => $account->primary_address ?? 'NA',
            'secondaryAddress' => !empty($account->secondary_address) ? $account->secondary_address : 'NA',
            'city' => ucwords($account->city) ?? 'NA',
            'country' => ucwords($account->country) ?? 'NA',
            'delivery' => $account->delivery,
            'pickup' => $account->pick_up,
            'authUsers' => $this->getAuthUsers($userId)
       ];
   }

   private function getAuthUsers($userId): array
   {
       $authUsers = $this->getAuthQuery($userId);
       return $this->formatAuthUsers($authUsers);
   }

   private function getAuthQuery($userId)
   {
       return  \DB::table('autorized_users')
           ->select('id','first_name', 'last_name', 'telephone')
           ->where('user_id', '=', $userId)
           ->get();
   }

   private function formatAuthUsers($authUsers): array
   {
       foreach ($authUsers as $user) {
           $authUsersData[] = [
               'authId' => $user->id,
               'name' => ucwords($user->first_name) . ' ' . ucwords($user->last_name),
               'telephone' => $user->telephone ?? 'NA'
           ];
       }
       return $authUsersData ?? [];
   }

   public function update(Request $request)
   {
       $userId = auth()->user()->id;
       $data = $request->all();

       if(!empty($data)) {
           $this->updateQuery($userId, $data);
       }
       return back();
   }

   private function updateQuery($userId, $data): void
   {
       \DB::table('profiles')
           ->where('user_id', $userId)
           ->update(['primary_address' => $data['primary_address'], 'secondary_address' => $data['secondary_address'],
               'city'=>$data['city'], 'country'=>$data['country']]);
   }
}

