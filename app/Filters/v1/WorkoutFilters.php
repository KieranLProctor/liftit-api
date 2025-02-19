<?php

namespace App\Filters\v1;

use Essa\APIToolKit\Filters\QueryFilters;

class WorkoutFilters extends QueryFilters
{
    protected array $allowedFilters = ['name', 'day_of_week'];

    protected array $allowedSorts = ['created_at'];

    protected array $columnSearch = [];
}
