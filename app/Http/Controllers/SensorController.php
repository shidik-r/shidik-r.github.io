<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use App\Models\SensorRawData;
use App\Models\Setting;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function index(Request $request)
    {
        $refresh_rate = Setting::where('setting_name', 'refresh_interval')->first();
        if (!$refresh_rate) {
            $refresh_rate = new Setting();
            $refresh_rate->setting_name = "refresh_interval";
            $refresh_rate->setting_value = "10";
            $refresh_rate->description = "refresh inteval dalam hitungan detik.";
            $refresh_rate->save();
        }
        $refresh_rate = $refresh_rate->setting_value * 1000;

        return view('admin.dashboard', compact('refresh_rate'));
    }

    public function soilmoisture()
    {
        $datasensor = Sensor::select('*')->get();
        $normal = Setting::where('setting_name', 'soil_moisture_normal')->first();
        $abnormal = Setting::where('setting_name', 'soil_moisture_abnormal')->first();
        if (!$normal || !$abnormal) {
            return "No setting found!";
        }

        return view('soilmoisture', ['nilaisensor' => $datasensor, 'normal' => $normal->setting_value, 'abnormal' => $abnormal->setting_value]);
    }

    public function humidity()
    {
        $datasensor = Sensor::select('*')->get();
        $normal = Setting::where('setting_name', 'humidity_normal')->first();
        $abnormal = Setting::where('setting_name', 'humidity_abnormal')->first();
        if (!$normal || !$abnormal) {
            return "No setting found!";
        }

        return view('humidity', ['nilaisensor' => $datasensor, 'normal' => $normal->setting_value, 'abnormal' => $abnormal->setting_value]);
    }

    public function temperature()
    {
        $datasensor = Sensor::select('*')->get();
        $normal = Setting::where('setting_name', 'temperature_normal')->first();
        $abnormal = Setting::where('setting_name', 'temperature_abnormal')->first();
        if (!$normal || !$abnormal) {
            return "No setting found!";
        }

        return view('temperature', ['nilaisensor' => $datasensor, 'normal' => $normal->setting_value, 'abnormal' => $abnormal->setting_value]);
    }

    public function pump()
    {
        $datasensor = Sensor::select('pump', 'pump_status')->get();
        return view('pump_switch', ['nilaisensor' => $datasensor]);
    }

    public function switchPump(Request $request)
    {
        // Status pompa
        $status = ($request->switch_status == 1) ? "On" : "Off";

        // Ambil sensor
        $sensor = Sensor::find($request->sensor_id);
        if (!$sensor) {
            return redirect()->back()->with('error', 'Failed to switch ' . $status . ' the pump. No pump is found!');
        }

        // Ganti status pompa
        $sensor->pump_status = $request->switch_status;
        if ($sensor->save()) {
            return redirect()->back()->with('success', 'Pump is Switched ' . $status . '!');
        }
    }

    public function lastUpdate() {
        $lastData = SensorRawData::latest()->first();
        $formatted = now()->format('d F Y H:i:s');
        if ($lastData) {
            $formatted = $lastData->created_at->format('d F Y H:i:s');
        }
        return $formatted;
    }
}
