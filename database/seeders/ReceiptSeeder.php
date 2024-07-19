<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Receipt;
use App\Models\Donation;

class ReceiptSeeder extends Seeder
{
    public function run()
    {
        $donation = Donation::first();

        Receipt::create([
            'donation_id' => $donation->id,
            'receipt_number' => 'REC123456',
            'generated_at' => now(),
        ]);
    }
}

