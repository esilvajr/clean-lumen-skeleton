<?php

namespace Module1\Gateways\Repositories;

use Module1\Gateways;

interface RepositoryInterface
{
    public function where(?array $options = null) : void;
    public function orWhere(?array $options = null) : void;
    public function limit( ?int $limit = null) : void;
    public function get(array $columns = ['*']) : Array;
    public function model();
}
