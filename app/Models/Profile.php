<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model

{
    use HasFactory;

    protected $table = "profile";

    protected $primaryKey = 'id';

    protected $guarded = ['id', 'id_user'];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user','id');
    }
}
