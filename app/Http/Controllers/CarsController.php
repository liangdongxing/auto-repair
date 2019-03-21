<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends CommonController
{
    public function index()
    {
        return view('cars.index');
    }
}
