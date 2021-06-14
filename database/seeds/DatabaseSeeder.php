<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ModuleSeeder::class,
            PermissionSeeder::class,
            RoleSeeder::class,
            AdminUserSeeder::class,
            ContactUsDataSeeder::class,
            ProductSeeder::class,
            SiteSettingsSeeder::class,
            SliderSeeder::class,
            AboutUsSeeder::class,
            ContactUsDataSeeder::class,
        ]);
    }
}
