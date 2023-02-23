<?php

namespace App\Http\Controllers;


use Illuminate\Contracts\Support\Responsable;

class GenreController extends Controller
{
    /**
     * получение списка жанров
     * @return Responsable
     */
    public function index(): Responsable
    {
        return $this->success([]);
    }

    /**
     * редактирование жанра
     * @return Responsable
     */
    public function update(): Responsable
    {
        return $this->success([]);
    }
}
