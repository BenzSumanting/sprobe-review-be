<?php

namespace App\Repositories;

use App\Models\Employee;

class EmployeeRepository extends BaseRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct(Employee $model)
    {
        parent::__construct($model);
    }
}
