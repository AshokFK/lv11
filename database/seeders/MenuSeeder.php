<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Menu::insert([
            [
                'name' => 'Dashboard',
                'route_name' => 'dashboard',
                'icon' => 'dashboard-icon',
                'parent_id' => null,
                // 'permission_name' => 'view_dashboard',
                'order' => 1,
            ],
            [
                'name' => 'Users',
                'route_name' => 'users.index',
                'icon' => 'users-icon',
                'parent_id' => null,
                // 'permission_name' => 'view_users',
                'order' => 2,
            ],
            [
                'name' => 'Menu',
                'route_name' => 'menus.index',
                'icon' => 'menus-icon',
                'parent_id' => null,
                // 'permission_name' => 'view_users',
                'order' => 2,
            ],
            // Add more menu items as needed
        ]);
    }
}
