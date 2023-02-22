<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * регистрация юзера
     */
    public function register()
    {
        return 'регистрация юзера';
    }

    /**
     * авторизация и создания токена аутентификации
     */
    public function login()
    {
        return 'авторизация и создания токена аутентификации';
    }

    /**
     * удаление токена аутентификации
     */
    public function logout()
    {
        return 'удаление токена аутентификации';
    }
}
