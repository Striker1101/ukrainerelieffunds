<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug', 'title', 'donation', 'goal', 'category_id',
        'content_one','content_two','sub_topic','content_three','content_four',
        'content_five','content_six','content_seven','image','image_one','image_two'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

public function donors()
{
    return $this->hasMany(Donor::class);
}

}
