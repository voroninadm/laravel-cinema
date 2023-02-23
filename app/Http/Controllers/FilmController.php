<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;


class FilmController extends Controller
{
    /**
     * получение списка фильмов
     * @return Responsable
     */
    public function index(): Responsable
    {
        return $this->success([]);
    }

    /**
     * добавление фильма в базу
     * @return Responsable
     */
    public function store(): Responsable
    {
        return $this->success([], 201);
    }

    /**
     * получение информации о фильме
     * @return Responsable
     */
    public function show(): Responsable
    {
        return $this->success([]);
    }

    /**
     * редактирование фильма
     * @return Responsable
     */
    public function update(): Responsable
    {
        return $this->success([]);
    }

    /**
     * получение списка похожих фильмов
     * @return Responsable
     */
    public function similar(): Responsable
    {
        return $this->success([]);
    }
}
