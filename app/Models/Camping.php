<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camping extends Model
{
    use HasFactory;

    protected $fillable = ['camping_name', 'country', 'city','rating', 'review_number', 'link', 'image'];

    protected $guarded = [];

    public function path()
    {
        return route('campings.show', $this);
    }
}
