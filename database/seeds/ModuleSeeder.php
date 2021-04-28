<?php

use Illuminate\Database\Seeder;
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create Main Modules
        $admin_users_module = Module::create([
            'name' => 'admin_users',
        ]);

        $roles_module = Module::create([
            'name' => 'roles',
        ]);

        $modules_module = Module::create([
            'name' => 'modules',
        ]);
    }
}
