<?php

namespace App\Http\Controllers;

use App\account;

use Illuminate\Support\Facades\Request;

class external_database_controller extends Controller
{
    public function insert_account_data(){
        $account1 = new account;
        $account1->first_name = Request::get('first_name');
        $account1->last_name = Request::get('last_name');
        $account1->email = Request::get('email');
        $account1->password = Request::get('password');
        $account1->save();  
    }

	 //
}
