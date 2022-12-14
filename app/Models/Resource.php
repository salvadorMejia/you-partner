<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'resourceable_id',
        'resourceable_type',
        'path',
    ];

    // Relationships ------------------------
    /**
     * Get the parent resourceble model (homework or collaboration).
     */
    public function resourceable()
    {
        return $this->morphTo();
    }
}
