<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roaster extends Model
{
    protected $fillable = [
        'name','image'
    ];
    use HasFactory;
    public function detail()
    {
        return $this->hasMany(roaster_detail::class,'roaster_id','id');
    }
}
