<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'type_id',
        'price',
        'description',
        'persons',
        'image',
        'state'
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
