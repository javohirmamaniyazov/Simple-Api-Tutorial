<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Card;
use App\Models\Desk;
use App\Models\DeskList;
use App\Models\DeskTask;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Desk::factory(100)->create();
        DeskList::factory(100)->create();
        Card::factory(100)->create();
        DeskTask::factory(100)->create();
        // Task::factory(10)->create();
    }
}
