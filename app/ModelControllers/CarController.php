<?php

namespace App\ModelControllers;

use App\Exceptions\CarNotFoundException;
use App\ModelControllers\Repositories\CarRepository;
use App\Models\Car;

/**
 * Class CarRepository
 * @package App\ModelControllers
 */
class CarController
{
    /*** @var CarRepository */
    private CarRepository $repo;

    public function __construct()
    {
        $this->repo = new CarRepository();
    }

    /**
     * @param int $id
     * @return Car
     * @throws CarNotFoundException
     */
    public function findById(int $id): Car
    {
        return $this->repo->findById($id);
    }
}



