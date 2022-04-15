<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class place_order extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function order_letter()
    {
        return $this->hasMany(order_lettering::class,'order_id','id');
    }
    public function lettering()
    {
        return $this->hasMany(order_lettering::class,'order_id','id');
    }
    public function roaster()
    {
        return $this->hasMany(roaster::class,'order_id','id');
    }
}
