<?php

namespace App\Http\Controllers;

use App\Models\Acceleration;
use App\Models\CarbonLevel;
use App\Models\Inclination;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function __invoke()
    {
       $carbon = \request()->get('carbon');
       $inclination = \request()->get('inclination');
       $acceleration = \request()->get('acceleration');

      CarbonLevel::create([
          'carbon' => $carbon
      ]);
      Inclination::create([
          'inclination' => $inclination
      ]);
      Acceleration::create([
          'acceleration' => $acceleration
      ]);

      echo "data updated";
    }
}
