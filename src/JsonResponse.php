<?php

namespace MioNext\Jesponse;

use Symfony\Component\HttpFoundation\JsonResponse as HttpJsonResponse;

class JsonResponse
{
    /**
     * @param $data
     * @param string $message
     * @param int $code
     * @param int $statusCode
     * @param array $headers
     * @return HttpJsonResponse
     */
    public static function make($data = [], string $message = 'OK', int $code = Status::OK, int $statusCode = HttpJsonResponse::HTTP_OK, array $headers = []): HttpJsonResponse
    {
        if (is_null($data)) {
            $data = new \stdClass;
        }

        return new HttpJsonResponse([
            'code' => $code, 'data' => $data, 'message' => $message, 'timestamp' => time(),
        ], $statusCode, $headers);
    }
}
