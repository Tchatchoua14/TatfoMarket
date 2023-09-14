<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(1)->create();
        // \App\Models\Order::factory(50)->create();
        \App\Models\Newsletter::factory(100)->create();
        \App\Models\Message::factory(100)->create();
        // \App\Models\Coupon::factory(50)->create();
       $this->call([
        // ProductSeeder::class,
        MessageSeeder::class,
        // OrderSeeder::class,
        // ShippingSeeder::class,
        NewsletterSeeder::class,
        // CouponSeeder::class,
       ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
