<?php

namespace Core\Interactors\UseCases;

use Core\Interactors\UseCases\Requests\Request;
use Core\Interactors\UseCases\Responses\Responses;

interface UseCase
{
    public function __invoke(Request $request) : Response;
}