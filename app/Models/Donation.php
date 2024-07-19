<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'ngo_id', 'amount', 'payment_method', 'donation_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ngo()
    {
        return $this->belongsTo(NGO::class);
    }

    public function receipt()
    {
        return $this->hasOne(Receipt::class);
    }
}
