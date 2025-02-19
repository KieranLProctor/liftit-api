<?php

namespace App\Filters\v1;

use Essa\APIToolKit\Filters\QueryFilters;

class EquipmentFilters extends QueryFilters
{
    protected array $allowedFilters = ['name'];

    protected array $allowedIncludes = ['exercises'];

    protected array $columnSearch = ['name', 'description'];
}
