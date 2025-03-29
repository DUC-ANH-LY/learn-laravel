<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Start benchmarking
        $startTime = microtime(true);

        // Create 5 users
        User::factory(5)->create();

        // Ensure user with ID 1 exists
        $user = User::find(1);
        if (!$user) {
            $user = User::factory()->create([
                'id' => 1,
                'name' => 'Test User',
                'email' => 'test@example.com',
            ]);
        }

        // Create 10,000 tasks for user with ID 1 in batches
        $batchSize = 1000; // Insert 1,000 tasks per batch
        $totalTasks = 10000; // Total number of tasks to create
        for ($i = 1; $i <= $totalTasks; $i += $batchSize) {
            $tasks = [];
            for ($j = 0; $j < $batchSize && ($i + $j) <= $totalTasks; $j++) {
                $tasks[] = [
                    'title' => "Task " . ($i + $j),
                    'description' => "Description for Task " . ($i + $j),
                    'user_id' => $user->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            DB::table('tasks')->insert($tasks);
        }

        // End benchmarking
        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

        // Output the runtime
        echo "Database seeding completed in {$executionTime} seconds.\n";
    }
}
