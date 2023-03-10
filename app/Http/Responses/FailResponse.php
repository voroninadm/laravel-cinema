<?php

declare(strict_types=1);


namespace App\Http\Responses;


use Symfony\Component\HttpFoundation\Response;

class FailResponse extends BaseJsonResponse
{
    public function __construct($errors, protected ?string $message = null, int $code = Response::HTTP_BAD_REQUEST)
    {
        parent::__construct($code, $errors);
    }

    protected function makeResponseData(): array
    {
        return [
            'message' => $this->message,
            'errors' => $this->prepareData(),
        ];
    }
}
