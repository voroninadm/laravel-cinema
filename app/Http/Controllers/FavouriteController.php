<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavouriteController extends Controller
{
    /**
     * получение списка фильмов, добавленных юзером в избранное
     */
    public function index()
    {
        return 'получение списка фильмов, добавленных юзером в избранное';
    }

    /**
     * добавление фильма в избранное
     */
    public function store()
    {
        return 'получение списка фильмов, добавленных юзером в избранное';
    }

    /**
     * удаление фильма из избранного
     */
    public function destroy()
    {
        return 'удаление фильма из избранного';
    }
}
