<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lamaran;

class Response extends Model
{
    use HasFactory;
    protected $fillable = [
        'lamaran_id',
        'status',
        'date',
    ];

    public function lamaran ()
    {
        return $this->belongsTo
        (Lamaran::class);
    }
}
