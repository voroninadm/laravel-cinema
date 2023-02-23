<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;

class FavouriteController extends Controller
{
    /**
     * получение списка фильмов, добавленных юзером в избранное
     * @return Responsable
     */
    public function index(): Responsable
    {
        return $this->success([]);
    }

    /**
     * добавление фильма в избранное
     * @return Responsable
     */
    public function store(): Responsable
    {
        return $this->success([], 201);
    }

    /**
     * удаление фильма из избранного
     * @return Responsable
     */
    public function destroy(): Responsable
    {
        return $this->success([]);
    }
}
