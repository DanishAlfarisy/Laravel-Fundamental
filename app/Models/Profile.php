<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'nama_lengkap',
        'tempat_lahir',
        'alamat',
   ];

    public function hobbies()
    {
        return $this->hasMany(Hobby::class);
    }

}