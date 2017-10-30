<?php

namespace Module1\Interactors\UseCases;

use Module1\Interactors\UseCases\Requests\Request;
use Module1\Interactors\UseCases\Responses\Responses;

interface UseCase
{
    public function __invoke(Request $request) : Response;
}