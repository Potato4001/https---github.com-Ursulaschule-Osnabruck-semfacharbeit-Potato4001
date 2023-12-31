<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treasury extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function teams()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
