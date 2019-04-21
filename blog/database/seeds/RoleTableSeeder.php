<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'A Admin User';
        $role_admin->save();
 
        $role_nguoi_thuyet_trinh = new Role();
        $role_nguoi_thuyet_trinh->name = 'nguoi_thuyet_trinh';
        $role_nguoi_thuyet_trinh->description = 'Người thuyết trình';
        $role_nguoi_thuyet_trinh->save();
 
        $role_nguoi_tham_du = new Role();
        $role_nguoi_tham_du->name = 'nguoi_tham_du';
        $role_nguoi_tham_du->description = 'Người tham dự';
        $role_nguoi_tham_du->save();
    }
}
