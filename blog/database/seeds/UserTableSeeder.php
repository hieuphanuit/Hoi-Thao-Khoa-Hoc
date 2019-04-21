<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_manager  = Role::where('name', 'admin')->first();
        $role_nguoi_thuyet_trinh  = Role::where('name', 'nguoi_thuyet_trinh')->first();
        $role_nguoi_tham_du  = Role::where('name', 'nguoi_tham_du')->first();
        //
        $manager = new User();
        $manager->name = 'Admin';
        $manager->email = 'admin@admin.com';
        $manager->password = bcrypt('123456');
        $manager->save();
        $manager->roles()->attach($role_manager);
        //
        $nguoi_thuyet_trinh = new User();
        $nguoi_thuyet_trinh->name = 'Người thuyết trình';
        $nguoi_thuyet_trinh->email = 'nguoithuyettrinh@mailinator.com';
        $nguoi_thuyet_trinh->password = bcrypt('123456');
        $nguoi_thuyet_trinh->save();
        $nguoi_thuyet_trinh->roles()->attach($role_nguoi_thuyet_trinh);
        //
        $nguoi_tham_du = new User();
        $nguoi_tham_du->name = 'Người tham dự';
        $nguoi_tham_du->email = 'nguoithamdu@mailinator.com';
        $nguoi_tham_du->password = bcrypt('123456');
        $nguoi_tham_du->save();
        $nguoi_tham_du->roles()->attach($role_nguoi_tham_du);
    }
}
