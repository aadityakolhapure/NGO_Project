<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NGO;

class NGOSeeder extends Seeder
{
    public function run()
    {
        NGO::create([
            'name' => 'Helping Hands',
            'email' => 'contact@helpinghands.org',
            'phone' => '1234567890',
            'address' => '123 Charity St, Kindness City',
            'description' => 'Helping Hands is dedicated to providing support and care to those in need.',
        ]);

        NGO::create([
            'name' => 'Green Earth',
            'email' => 'info@greenearth.org',
            'phone' => '0987654321',
            'address' => '456 Nature Ave, Green City',
            'description' => 'Green Earth focuses on environmental conservation and sustainability initiatives.',
        ]);
    }
}
