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
                'code' => 'PEN',
                'name' => 'Pending',
            ],
            [
                'code' => 'BCKLG',
                'name' => 'Backlog',
            ],
            [
                'code' => 'COMP',
                'name' => 'Complete',
            ]
        ];


        foreach($statuses  as $status) {
            Status::create($status);
        }
    }
}
