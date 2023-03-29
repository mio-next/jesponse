<?php

namespace MioNext\Jesponse;

use Symfony\Component\HttpFoundation\JsonResponse as HttpJsonResponse;

class JsonResponse
{
    /**
     * @return HttpJsonResponse
     */
    public static function make(): HttpJsonResponse
    {
        return new HttpJsonResponse();
    }
}
