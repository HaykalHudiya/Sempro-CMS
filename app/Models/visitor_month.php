<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitor_month extends Model
{
    use HasFactory;

    protected $fillable = ['post_id', 'tipe_id', 'ip', 'date'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
    public function tipe()
    {
        return $this->belongsTo(Tipe::class);
    }
}
