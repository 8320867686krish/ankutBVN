<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'mobile_number',
        'booking_date',
        'xetra_id',
        'mandal_id'
    ];
    public function xetra()
    {
        return $this->belongsTo(Xetra::class, 'xetra_id');
    }
    public function manadal()
    {
        return $this->belongsTo(Mandal::class, 'mandal_id');
    }
    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
