<?php

namespace Core\Interactors\UseCase\Responses;

interface Response
{
    public function addData($key, $value): void;
    public function addError($key, Error $error): void;
    public function getData(): array;
    public function getErrors(): array;
    public function hasData(): bool;
    public function hasErrors(): bool;
    public function isFailed(): bool;
    public function isSuccessful(): bool;
}