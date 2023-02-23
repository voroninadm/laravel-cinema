<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;

class AuthController extends Controller
{
    /**
     * регистрация юзера
     * @return Responsable
     */
    public function register(): Responsable
    {
        return $this->success([],201);
    }

    /**
     * авторизация и создания токена аутентификации
     * @return Responsable
     */
    public function login(): Responsable
    {
        return $this->success([]);
    }

    /**
     * удаление токена аутентификации
     * @return Responsable
     */
    public function logout(): Responsable
    {
        return $this->success(null, 204);
    }
}
