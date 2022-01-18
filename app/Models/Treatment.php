<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    public function order()
    {
        return $this->hasMany(Orders::class);
    }

    public function process()
    {
        return $this->hasMany(Process::class);
    }
}
