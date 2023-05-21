<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Food extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'ingredients',
        'price',
        'rate',
        'type',
        'picture_path'
    ];

    public function getPicturePathAttribute()
    {
        return url('') . Storage::url($this->attributes['picture_path']);
    }
}
