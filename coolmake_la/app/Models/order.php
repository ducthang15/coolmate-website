<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class order extends Model
{
    use HasFactory,Notifiable;
    use Notifiable;

    protected $fillable = [
        'name', 'phone', 'email', 'city', 'district', 'commune', 'address', 'note', 'order_detail', 'token',
    ];
}
