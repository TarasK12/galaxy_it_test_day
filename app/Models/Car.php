<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * Class Car
 * @property int    $id
 * @property string $brand
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @package App\Models
 * @method static where(string $column, string $operator, string $value)
 */
class Car extends Model
{

    /*** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /*** @return string */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return void
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }
}
