<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserList;

class UserListSeeder extends Seeder
{
    
    public function run(): void
    {
        $startYear = 2020;
        $endYear = 2025;

        for ($year = $startYear; $year <= $endYear; $year++) {
            UserList::create(['list_name' => "Gjenerat " . $year]);
        }
    }
}
