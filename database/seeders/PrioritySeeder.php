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
                'id' => '9c26bd26-67da-44c2-94c2-04e4236aee47',
                'code' => 'HGST',
                'name' => 'Highest',
            ],
            [
                'id' => '9c26bd26-6829-4835-95a6-d76a0efde9e5',
                'code' => 'HGH',
                'name' => 'High',
            ],
            [
                'id' => '9c26bd26-6869-4263-9d44-3fb883625005',
                'code' => 'MEDM',
                'name' => 'Medium',
            ],
            [
                'id' => '9c26bd26-68a6-4956-9de7-97b2495200bc',
                'code' => 'LOW',
                'name' => 'Low',
            ],
            [
                'id' => '9c26bd26-68a6-4956-9de7-97b2495201bc',
                'code' => 'LOWST',
                'name' => 'Lowest',
            ]
            ];
          
        foreach($priorities  as $priority) {
            Priority::create($priority);
        }
    }
}