<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;

class CommentController extends Controller
{
    /**
     * получение списка отзывов к фильму
     * @return Responsable
     */
    public function index(): Responsable
    {
        return $this->success([]);
    }

    /**
     * добавление отзыва к фильму
     * @return Responsable
     */
    public function store()
    {
        return $this->success([], 201);
    }

    /**
     * редактирование отзыва к фильму
     * @return Responsable
     */
    public function update()
    {
        return $this->success([]);
    }

    /**
     * удаление отзыва к фильму
     * @return Responsable
     */
    public function destroy()
    {
        return $this->success([], 204);
    }
}
