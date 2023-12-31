<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    use HasFactory;

    protected $fillable = ['name','company','business','type','email','phone','address','city','country', 'lastname', 'code'];
}
