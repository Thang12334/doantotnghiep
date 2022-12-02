<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    // liên kết roo,_id vs bill)id
    use HasFactory;
    public function room () {
        return $this->belongsTo(Room::class,'room_id');
    }
    public function detail () {
        return $this->hasMany(BillDetail::class,'bill_id');
    }
}
