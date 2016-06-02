<?php

use Illuminate\Database\Seeder;
use AdminDemo\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //创建一个管理员
        User::updateOrCreate(['email' => 'liyu001989@gmail.com'], [
            'name' => 'liyu001989',
            'is_admin' => true,
            'password' => bcrypt(123456),
        ]);

        // 填充好多用户
        $users = factory(User::class)->times(100)->make();
        User::insert($users->getAttributes());

        // password 是hidden的，toArray的时候去掉了，所以只能在赋值一次了
        // 其实不填充password也没什么问题
        //\DB::table('users')->update(['password' => bcrypt(123456)]);
    }
}
