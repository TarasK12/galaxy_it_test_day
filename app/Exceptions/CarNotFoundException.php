<?php

namespace App\Exceptions;

use Exception;

/**
 * Class CarNotFoundException
 * @package App\Exceptions
 */
class CarNotFoundException extends Exception
{
    /*** @var string */
    protected $message = 'Car Not Found';
}
