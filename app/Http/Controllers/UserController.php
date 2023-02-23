<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;

class UserController extends Controller
{
    /**
     * получение профиля пользователя
     * @return Responsable
     */
    public function show(): Responsable
    {
        return $this->success(['получение профиля пользователя']);
    }

    /**
     * обновление профиля пользователя
     * @return Responsable
     */
    public function update(): Responsable
    {
        return $this->success([]);
    }
}
