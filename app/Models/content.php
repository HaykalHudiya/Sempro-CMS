<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class content extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'link', 'description','gallery_id', 'type'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
