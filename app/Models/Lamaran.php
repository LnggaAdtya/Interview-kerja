<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Response;

class lamaran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'age',
        'phone_number',
        'last_education',
        'education_name',
        'cv_file',
    ];

    public function response ()
    {
        return $this->hasOne(Response::class);
    }
}
