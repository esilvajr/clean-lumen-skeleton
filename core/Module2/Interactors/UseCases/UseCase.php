<?php

namespace Module2\Interactors\UseCases;

use Module2\Interactors\UseCases\Requests\Request;
use Module2\Interactors\UseCases\Responses\Responses;

interface UseCase
{
    public function __invoke(Request $request) : Response;
}