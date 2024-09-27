<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use App\Models\SensorRawData;
use Illuminate\Http\Request;

class ApiSensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sensors = Sensor::get();
        return response()->json($sensors);
    }

    /**
     * Get pump status by sensor id
     * @param   string  $sensorId
     *
     */
    public function pumpStatus($sensorId) {
        try {
            $sensor = Sensor::select('pump_status')->where('id', $sensorId)->first();
            if (!$sensor) {
                throw new \Exception("No sensor found!", 404);
            }
            return response()->json($sensor);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }

    }

    /**
     * Post all sensor data
     *
     *
     */
    public function postData(Request $request) {
        try {
            // Get sensor
            $sensor = Sensor::find($request->id);
            if (!$sensor) {
                throw new \Exception("No sensor found!", 404);
            }

            // Save raw data
            $rawData = new SensorRawData();
            $rawData->sensor_id = $sensor->id;
            $rawData->soil_moisture = $request->soil_moisture;
            $rawData->humidity = $request->humidity;
            $rawData->temperature = $request->temperature;
            $rawData->save();

            if ($rawData) {
                // Update sensor
                $sensor->soil_moisture = $request->soil_moisture;
                $sensor->humidity = $request->humidity;
                $sensor->temperature = $request->temperature;
                $sensor->save();

                if ($sensor) {
                    return response($sensor);
                }
            }
            throw new \Exception("Fail to update sensor data!", 500);
        } catch (\Throwable $th) {
            return response()->json($th->getMessage());
        }
    }

}
