<?php

namespace App\Services\Auth;

use App\Interfaces\auth\LoginInterface;
use App\Repositories\auth\LoginRepository;

class LoginService implements LoginInterface{

    public function login($data){

        $dataLogin=(new LoginRepository)->login($data);

        return $dataLogin;
    }
}
