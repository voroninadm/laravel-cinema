<?php

declare(strict_types=1);


namespace App\Http\Responses;


use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

abstract class BaseJsonResponse implements Responsable
{
    public function __construct(
        public int $statusCode,
        protected mixed $data = [],
    ) {
    }

    public function toResponse($request): JsonResponse|Response
    {
        return response()->json($this->makeResponseData(), $this->statusCode);
    }

    /**
     * Преобразование возвращаемых данных к массиву.
     */
    protected function prepareData(): array
    {
        if ($this->data instanceof Arrayable) {
            return $this->data->toArray();
        }

        return $this->data;
    }

    /**
     * Формирование содержимого ответа.
     */
    abstract protected function makeResponseData(): array;
}
