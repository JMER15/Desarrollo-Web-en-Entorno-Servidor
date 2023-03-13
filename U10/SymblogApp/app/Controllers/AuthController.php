<?php

namespace App\Controllers;

use App\Models\User;

class AuthController extends BaseController
{
    public function getLogin()
    {
        return $this->renderHTML('login.twig');
    }
}

?>