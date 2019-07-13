<?php
declare(strict_types = 1);

namespace J\Http;

interface Request
{
    public function method(): Method;

    public function param(string $key);

}