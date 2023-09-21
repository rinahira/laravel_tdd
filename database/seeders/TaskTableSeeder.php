<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'title' => Str::random(512),
            'executed' => false,
        ]);

        // 静的
        DB::table('tasks')->insert([
            'title' => "テストタスク",
            'executed' => false,
        ]);
        DB::table('tasks')->insert([
            'title' => "終了タスク",
            'executed' => true,
        ]);
    }
}
