<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class ControllerCar extends Controller
{
    public function getCars() {
        $data = Car::All();
        return $data;
    }
}
