<?php

namespace Appwrite\Utopia\Database\Validator\Queries;

use Utopia\Database\Validator\Query\Select;

class Attributes extends Base
{
    public const ALLOWED_ATTRIBUTES = [
        'key',
        'type',
        'size',
        'required',
        'array',
        'status',
        'error'
    ];

    public const PROHIBITED_QUERIES = [
        Select::class
    ];

    /**
     * Expression constructor
     *
     */
    public function __construct()
    {
        parent::__construct('attributes', self::ALLOWED_ATTRIBUTES, self::PROHIBITED_QUERIES);
    }
}
