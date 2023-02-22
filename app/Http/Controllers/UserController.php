<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * получение профиля пользователя
     */
    public function show()
    {
        return 'получение профиля пользователя';
    }

    /**
     * обновление профиля пользователя
     */
    public function update()
    {
        return 'обновление профиля пользователя';
    }
}
