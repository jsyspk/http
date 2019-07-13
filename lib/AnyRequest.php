<?php
declare(strict_types = 1);

namespace J\Http;

abstract class AnyRequest implements Request
{
    protected $headers;
    protected $pathParams;
    protected $queryParams;
    protected $bodyParams;

    public function __construct()
    {

    }

    public function method(): Method
    {
        return $this->method();
    }
}