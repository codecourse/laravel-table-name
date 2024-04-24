<?php

namespace App\Models\Traits;

trait GetsTableName
{
    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
