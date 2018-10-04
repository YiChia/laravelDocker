<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_employee')->insert([
            'id_staff' => '325',
            'acc' => '20170703',
            'director_group' => '0',
            'id_acc_group' => '8',
            'id_dep_group' => '8',
            'name' => 'yc',
            'level' => '100',
            'permission' => '',
            'remark' => 'RD',
            'enable' => '1',
            'id_acc' => '325',
            'password' => bcrypt('secret'),
        ]);

    }
}
