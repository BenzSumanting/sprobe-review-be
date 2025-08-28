<?php

namespace App\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self regular()
 * @method static self probationary()
 * @method static self contractual()
 */
final class EmployeeStatus extends Enum
{
    protected static function values(): array
    {
        return [
            'regular'      => 1,
            'probationary' => 2,
            'contractual'  => 3,
        ];
    }

    protected static function labels(): array
    {
        return [
            'regular'      => "Regular",
            'probationary' => "Probationary",
            'contractual'  => "Contractual",
        ];
    }

    public static function getValues(): array
    {
        return array_values(static::values());
    }

    public static function getLabels(): array
    {
        return array_values(static::labels());
    }
}
