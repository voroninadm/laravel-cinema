<?php

namespace App\Http\Controllers;

use App\Http\Responses\ExceptionResponse;
use App\Http\Responses\FailResponse;
use App\Http\Responses\SuccessResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected function success($data, ?int $code = Response::HTTP_OK): SuccessResponse
    {
        return new SuccessResponse($data, $code);
    }

    protected function fail($data, ?string $message = null, int $code = Response::HTTP_BAD_REQUEST): FailResponse
    {
        return new FailResponse($data, $message, $code);
    }

    protected function exception(Throwable $exception, int $code = Response::HTTP_INTERNAL_SERVER_ERROR): ExceptionResponse
    {
        return new ExceptionResponse($exception, $code);
    }
}
