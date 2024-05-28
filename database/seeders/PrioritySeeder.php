<?php

namespace Database\Seeders;

use App\Models\Priority;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $priorities = [
            [
                'code' => 'HGST',
                'name' => 'Highest',
            ],
            [
                'code' => 'HGH',
                'name' => 'High',
            ],
            [
                'code' => 'MEDM',
                'name' => 'Medium',
            ],
            [
                'code' => 'LOW',
                'name' => 'Low',
            ],
            [
                'code' => 'LOWST',
                'name' => 'Lowest',
            ]
            ];

        foreach($priorities  as $priority) {
            Priority::create($priority);
        }
    }
}