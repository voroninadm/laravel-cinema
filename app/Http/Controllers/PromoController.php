<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Responsable;

class PromoController extends Controller
{
    /**
     * получение промо-фильма
     * @return Responsable
     */
    public function show(): Responsable
    {
        return $this->success([]);
    }

    /**
     * установка промо-фильма
     * @return Responsable
     */
    public function store(): Responsable
    {
        return $this->success([], 201);
    }
}
