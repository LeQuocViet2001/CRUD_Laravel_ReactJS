<?php

namespace App\Fillter;

class ApiFilter {

    protected $safeParm = [];
    protected $columnMap = [];
    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte'=> '>='
    ];




}
