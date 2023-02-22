<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    /**
     * получение списка фильмов
     */
    public function index()
    {
        return 'получение списка фильмов';
    }

    /**
     * добавление фильма в базу
     */
    public function store()
    {
        return 'добавление фильма в базу';
    }

    /**
     * получение информации о фильме
     */
    public function show()
    {
        return 'получение информации о фильме';
    }

    /**
     * редактирование фильма
     */
    public function update()
    {
        return 'редактирование фильма';
    }

    /**
     * получение списка похожих фильмов
     */
    public function similar()
    {
        return 'получение списка похожих фильмов';
    }
}
