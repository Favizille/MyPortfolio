<?php
namespace App\Repository\Eloquent;

use App\Models\User;

class LoginRepository
{
    protected $user;
    public function __construct(User $user) {}

    public function login($data){
        auth()->attempt($data);
    }
}
