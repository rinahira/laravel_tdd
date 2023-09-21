<?php

namespace Tests\Unit;

use App\Models\Task;
use Tests\TestCase;

class TaskTest extends TestCase
{
    /**
     * Get Seeder Tasks Test
     */
    public function testGetSeederTask(): void
    {
        // 全件取得結果が3件であること
        $tasks = Task::all();
        $this->assertEquals(3, count($tasks));

        // 実行完了していないものが2件
        $taskNotFinished = Task::where('executed', false)->get();
        $this->assertEquals(2, count($taskNotFinished));

        // 実行完了しているものが1件
        $taskFinished = Task::where('executed', true)->get();
        $this->assertEquals(1, count($taskFinished));

        // タイトル指定取得 1件
        $task1 = Task::where('title', "テストタスク")->first();
        $this->assertFalse(boolval($task1->executed));

        $task2 = Task::where('title', "終了タスク")->first();
        $this->assertTrue(boolval($task2->executed));

    }
}
