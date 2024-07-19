<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Donation;
use App\Models\User;
use App\Models\NGO;

class DonationSeeder extends Seeder
{
    public function run()
    {
        $user = User::where('email', 'user@example.com')->first();
        $ngo = NGO::where('name', 'Helping Hands')->first();

        Donation::create([
            'user_id' => $user->id,
            'ngo_id' => $ngo->id,
            'amount' => 100.00,
            'payment_method' => 'PhonePe',
            'donation_date' => now(),
        ]);
    }
}
