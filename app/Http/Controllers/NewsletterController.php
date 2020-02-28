<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Carbon\Carbon;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function insert()
    {
        if(isset($this->request->email) && !empty($this->request->email)) {

            if(!Newsletter::where('email', '=', $this->request->email)->exists()) {
                $this->insertQuery();
            }
        }
       return view('index.welcome');
    }

    private function insertQuery(): void
    {
        \DB::table('newsletters')->insert(
            [
                'email' => $this->request->email,
                'created_at' => Carbon::now(),
            ]
        );
    }
}
