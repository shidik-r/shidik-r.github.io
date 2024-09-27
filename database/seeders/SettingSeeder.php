<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::upsert([
            ['setting_name' => 'refresh_interval', 'setting_value' => '30', 'description' => 'refresh inteval dalam hitungan detik.'],
            ['setting_name' => 'temperature_normal', 'setting_value' => '20', 'description' => 'temperature normal'],
            ['setting_name' => 'temperature_abnormal', 'setting_value' => '40', 'description' => 'temperature abnormal'],
            ['setting_name' => 'humidity_normal', 'setting_value' => '60', 'description' => 'humidity normal'],
            ['setting_name' => 'humidity_abnormal', 'setting_value' => '80', 'description' => 'humidity abnormal'],
            ['setting_name' => 'soil_moisture_normal', 'setting_value' => '50', 'description' => 'soil moisture normal'],
            ['setting_name' => 'soil_moisture_abnormal', 'setting_value' => '90', 'description' => 'soil moisture abnormal'],
        ], uniqueBy: ['setting_name'], update: ['setting_value', 'description']);
    }
}
