<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * получение списка отзывов к фильму
     */
    public function index()
    {
        return 'получение списка отзывов к фильму';
    }

    /**
     * добавление отзыва к фильму
     */
    public function store()
    {
        return 'добавление отзыва к фильму';
    }

    /**
     * редактирование отзыва к фильму
     */
    public function update()
    {
        return 'редактирование отзыва к фильму';
    }

    /**
     * удаление отзыва к фильму
     */
    public function destroy()
    {
        return 'удаление отзыва к фильму';
    }
}
