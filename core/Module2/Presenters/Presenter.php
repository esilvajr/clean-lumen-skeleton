<?php

namespace Module2\Presenters;

use Module2\Interactors\UseCases\UseCase;

interface Presenter
{
    public function present(UseCase $case);
}