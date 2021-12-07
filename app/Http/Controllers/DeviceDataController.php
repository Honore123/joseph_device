<?php

namespace App\Http\Controllers;

use App\Models\DeviceData;
use Illuminate\Http\Request;

class DeviceDataController extends Controller
{
    public function index()
    {
        $data = DeviceData::query()->orderBy('id','DESC')->first();

        return view('welcome', [
            'data' => $data,
        ]);
    }
    public function ajax()
    {
        $response = DeviceData::query()->orderBy('id','DESC')->take(10)->get();

        return response()->json($response);
    }
}
