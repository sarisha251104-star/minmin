<?php
declare(strict_types=1);

namespace App\Models;

class DateModel
{
    private array $dates;

    public function __construct()
    {
        $this->dates = require APP_ROOT . '/app/Data/dates.php';
    }

    public function all(): array
    {
        return $this->dates;
    }

    public function find(int $id): ?array
    {
        foreach ($this->dates as $date) {
            if ($date['id'] === $id) {
                return $date;
            }
        }
        return null;
    }
}
