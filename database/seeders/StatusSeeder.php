<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
       $statuses = [
            [
                'id' => '9c26bd26-61dd-457a-9b00-8e737aebce70',
                'code' => 'PEN',
                'name' => 'Pending',
            ],
            [
                'id' => '9c26bd26-6629-4f44-b4fe-cce56ce74e86',
                'code' => 'BCKLG',
                'name' => 'Backlog',
            ],
            [
                'id' => '9c26bd26-61dd-457a-9b00-8e737aftgy70',
                'code' => 'COMP',
                'name' => 'Complete',
            ]
        ];

        foreach($statuses  as $status) {
            Status::create($status);
        }
    }
}
