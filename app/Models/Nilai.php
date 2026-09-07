<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    protected $fillable = [
        'user_id',
        'kedisiplinan',
        'keterampilan',
        'skill',
    ];

    protected function casts(): array
    {
        return [
            'kedisiplinan' => 'decimal:2',
            'keterampilan' => 'decimal:2',
            'skill' => 'decimal:2',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
