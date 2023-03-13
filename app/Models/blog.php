<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'description',
        'category',
        'image',
    ];

    public function blogs()
    {
        return $this->hasMany(blog::class);
    }
}
