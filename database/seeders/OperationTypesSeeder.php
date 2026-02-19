<?php

namespace Database\Seeders;

use App\Models\OperationTypes;
use Illuminate\Database\Seeder;

class OperationTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $operationTypes = [
            [
                'type_en' => 'Premium',
                'type_gu' => 'પ્રીમિયમ',
                'price' => 10000,
                'is_active' => 1,
            ],
            [
                'type_en' => 'Phaco',
                'type_gu' => 'ફાકો',
                'price' => 5000,
                'is_active' => 1,
            ],
            [
                'type_en' => 'Relief',
                'type_gu' => 'રાહત',
                'price' => 3000,
                'is_active' => 1,
            ],
            [
                'type_en' => 'Nominal',
                'type_gu' => 'નોમિનલ',
                'price' => 1000,
                'is_active' => 1,
            ],
            [
                'type_en' => 'PTR',
                'type_gu' => 'PTR',
                'price' => 1500,
                'is_active' => 1,
            ],
            [
                'type_en' => 'Other',
                'type_gu' => 'અન્ય',
                'price' => 1500,
                'is_active' => 1,
            ],
        ];

        foreach ($operationTypes as $operationType) {
            OperationTypes::create($operationType);
        }
    }
}
