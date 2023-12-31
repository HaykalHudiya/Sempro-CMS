<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;

    public const Published = 1;
    public const Draft = 0;

    protected $fillable = ['category_id', 'tipe_id', 'title', 'description', 'is_publish', 'content', 'edited'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tipe()
    {
        return $this->belongsTo(Tipe::class);
    }
}
