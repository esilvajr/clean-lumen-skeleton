<?php

namespace Core\Presenters;

use Core\Interactors\UseCases\UseCase;

interface Presenter
{
    public function present(UseCase $case);
}