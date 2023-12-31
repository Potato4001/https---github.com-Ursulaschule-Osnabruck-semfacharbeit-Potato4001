<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function members()
    {
        return $this->hasMany(User::class);
    }

    public function types()
    {
        return $this->belongsTo(TeamType::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
