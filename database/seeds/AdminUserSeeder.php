<?php

use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create Admin user
        $user = AdminUser::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Crypt::encrypt('admin'),
            'role_id' => Role::where('name', '=', 'administrator')->firstOrFail()->id,
            'is_super' => 1
        ]);
        $user->assignRole(Role::where('name', '=', 'administrator')->firstOrFail());
    }
}
