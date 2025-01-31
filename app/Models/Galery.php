<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Galery extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}