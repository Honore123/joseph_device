<?php

namespace App\Http\Controllers;

use App\Models\Acceleration;
use App\Models\CarbonLevel;
use App\Models\DeviceData;
use App\Models\Inclination;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function __invoke()
    {
       $carbon = request()->get('carbon');
       $inclination = \request()->get('inclination');
       $acceleration = \request()->get('acceleration');

      DeviceData::create([
          'acceleration' => $acceleration,
          'carbon' => $carbon,
          'inclination' => $inclination,
          'time' => now(),
      ]);

      echo "data updated";
    }
}
