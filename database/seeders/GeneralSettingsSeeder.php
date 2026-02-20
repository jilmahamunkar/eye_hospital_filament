<?php

namespace Database\Seeders;

use App\Models\GeneralSettings;
use Illuminate\Database\Seeder;

class GeneralSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generalSettings = [
            [
                'key' => 'case_fees',
                'value' => '50',
            ],
            [
                'key' => 'wellfare_fund',
                'value' => '100',
            ],
        ];

        foreach ($generalSettings as $setting) {
            GeneralSettings::create($setting);
        }
    }
}
