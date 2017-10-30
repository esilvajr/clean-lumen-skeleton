<?php

namespace Module1\Presenters;

use Module1\Interactors\UseCases\UseCase;

interface Presenter
{
    public function present(UseCase $case);
}