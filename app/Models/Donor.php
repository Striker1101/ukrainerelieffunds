<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'amount',
        'mode', 'option', 'donation_id'
    ];

    public function donation()
    {
        return $this->belongsTo(Donation::class);
    }
}
