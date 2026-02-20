<?php

namespace Database\Seeders;

use App\Models\Surgeons;
use Illuminate\Database\Seeder;

class SurgeonsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $surgeons = [
            [
                'name' => 'ર્ડો. બચુંભાઇ પટેલ',
            ],
            [
                'name' => 'ર્ડા. ચિરાગભાઈ બેન્કર',
            ],
            [
                'name' => 'ર્ડો. પરેશભાઇ ઠક્કર',
            ],
            [
                'name' => 'ર્ડા. તિલકભાઈ પ્રજાપતિ',
            ],
            [
                'name' => 'ર્ડા. નિમેષભાઈ પુરોહિત',
            ],
            [
                'name' => 'ર્ડા. પિયુષભાઇ શાહ',
            ],
            [
                'name' => 'ર્ડા. જતીનભાઈ પટેલ',
            ],
            [
                'name' => 'ર્ડા. હસ્તીબેન પટેલ',
            ],
            [
                'name' => 'ર્ડા. નિકીતાબેન મોદી',
            ],
        ];

        foreach ($surgeons as $surgeon) {
            Surgeons::create($surgeon);
        }
    }
}
