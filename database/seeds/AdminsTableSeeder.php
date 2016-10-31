<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::updateOrcreate(['email' => 'admin@foo.com'], [
            'name' => 'liyu',
            'password' => bcrypt(123456),
        ]);
    }
}
