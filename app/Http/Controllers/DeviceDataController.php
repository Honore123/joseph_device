<?php

namespace App\Http\Controllers;

use App\Models\DeviceData;
use Illuminate\Http\Request;

class DeviceDataController extends Controller
{
    public function ajax()
    {
        $response = DeviceData::query()->orderBy('created_at','ASC')->get();

        return response()->json($response);
    }
}
