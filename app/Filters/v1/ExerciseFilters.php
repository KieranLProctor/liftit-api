<?php

namespace App\Filters\v1;

use Essa\APIToolKit\Filters\QueryFilters;

class ExerciseFilters extends QueryFilters
{
    protected array $allowedFilters = ['name', 'muscle_group', 'type', 'difficulty'];

    protected array $allowedIncludes = ['equipment'];

    protected array $columnSearch = [];
}
