<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'users.manage',
                'display_name' => '管理所有用户',
                'description' => '管理所有用户，包括用户的增删改查',
            ],
            [
                'name' => 'posts.manage',
                'display_name' => '管理所有帖子',
                'description' => '管理所有贴子，包括贴子的增删改查',
            ],
        ];

        foreach ($data as $item) {
            Permission::updateOrCreate(['name' => $item['name']], $item);
        }
    }
}
