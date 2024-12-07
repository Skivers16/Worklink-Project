<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certifications extends Model
{
    use HasFactory;

    protected $table = "certifications";

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
