<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Auth;

class UserRepository
{
   public function getUserId()
   {
       $user_id = Auth::user()->id;

       return $user_id;
   }
}