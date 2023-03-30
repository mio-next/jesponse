<?php

namespace MioNext\Jesponse;

abstract class Status
{
    const
        OK = 2000,
        Created = 2010,
        Accepted = 2020,
        Fail = 5000,
        Unauthorized = 4010,
        BadRequest = 4000,
        Forbidden = 4030,
        NotFound = 4040,
        MethodNotAllowed = 4050,
        NotAcceptable = 4060,
        RequestTimeout = 4080,
        UnprocessableContent = 4220,
        TooManyRequests = 4290,
        InternalServerError = 5001,
        ServiceUnavailable = 5030,


        _ = 0x00;


    /**
     * Status codes translation table.
     *
     * @var string[]
     */
    public static $texts = [
        self::OK => 'OK',
        self::Created => 'Created',
        self::Accepted => 'Accepted',
        self::Fail => 'Fail',
        self::Unauthorized => 'Unauthorized',
        self::BadRequest => 'Bad Request',
        self::Forbidden => 'Forbidden',
        self::NotFound => 'Not Found',
        self::MethodNotAllowed => 'Method Not Allowed',
        self::NotAcceptable => 'Not Acceptable',
        self::RequestTimeout => 'Request Timeout',
        self::UnprocessableContent => 'Unprocessable Content',
        self::TooManyRequests => 'Too Many Requests',
        self::InternalServerError => 'Internal Server Error',
        self::ServiceUnavailable => 'Service Unavailable',
    ];

    /**
     * @param int $code
     * @return string
     */
    public static function getText(int $code): string
    {
        return self::$texts[$code] ?? 'Unknown';
    }
}
