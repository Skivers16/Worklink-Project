<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    use HasFactory;

    protected $table = "skills";

    protected $primaryKey = 'id';

    protected $guarded = ['id', 'id_user'];

    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
