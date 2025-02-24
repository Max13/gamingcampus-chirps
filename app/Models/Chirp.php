<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    /** @use HasFactory<\Database\Factories\ChirpFactory> */
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    protected $casts = [
        'user_id' => 'integer',
    ];

    /**
     * Get the user of a chirp
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
