<?php

declare(strict_types=1);


namespace App\Http\Responses;


use Symfony\Component\HttpFoundation\Response;

class SuccessResponse extends BaseJsonResponse
{
    public function __construct($data, int $code = Response::HTTP_OK)
    {
        parent::__construct($code, $data);
    }

    protected function makeResponseData(): array
    {
        return $this->data ? ['data' => $this->prepareData()] : [];
    }
}
