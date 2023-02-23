<?php

declare(strict_types=1);


namespace App\Http\Responses;


use ReflectionClass;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class ExceptionResponse extends FailResponse
{
    public function __construct(protected Throwable $exception, int $code = Response::HTTP_INTERNAL_SERVER_ERROR)
    {
        parent::__construct([],$exception->getMessage(), $code ?? $this->getCode());
    }

    protected function prepareData(): array
    {
        return [
            'exception' => [
                'name' => $this->getExceptionClassName(),
            ],
        ];
    }

    private function getExceptionClassName(): string
    {
        return (new ReflectionClass($this->exception))->getShortName();
    }

    private function getCode(): int
    {
        return method_exists($this->exception, 'getStatusCode') ? $this->exception->getStatusCode() : $this->statusCode;
    }

}
