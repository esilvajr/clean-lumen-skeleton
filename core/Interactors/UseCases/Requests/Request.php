<?php

namespace Core\Interactors\UseCase\Requests;

interface Request
{
    public function all(): array;
    public function clear(): Request;
    public function get($key, $default = null);
    public function has($key): bool;
}
