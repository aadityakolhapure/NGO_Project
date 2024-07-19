<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NGO extends Model
{
    use HasFactory;
    protected $table = 'ngos'; 

    protected $fillable = ['name', 'email', 'phone', 'address', 'description'];

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
}
