<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DvdTitle extends Model
{
    use HasFactory;

    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }

    public function rating()
    {
        return $this->belongsTo('App\Models\Rating');
    }
}
