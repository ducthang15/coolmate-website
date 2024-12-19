<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    // Thêm image vào mảng fillable
    protected $fillable = [
        'image',  // Đảm bảo thuộc tính này có trong mảng fillable
    ];
}
