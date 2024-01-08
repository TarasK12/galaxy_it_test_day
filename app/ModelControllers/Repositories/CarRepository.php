<?php

namespace App\ModelControllers\Repositories;

use App\Exceptions\CarNotFoundException;
use App\Models\Car;

/**
 * Class CarRepository
 * @package App\ModelControllers\Repositories
 */
class CarRepository
{

    /**
     * @param int $id
     * @return Car
     * @throws CarNotFoundException
     */
    public function findById(int $id): Car
    {
        $car = Car::where("id", "=", $id)->first();
        if ($car === NULL) {
            throw new CarNotFoundException();
        }
        return $car;
    }

}
