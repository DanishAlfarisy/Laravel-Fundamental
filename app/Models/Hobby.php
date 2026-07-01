<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Hobby extends Model
{
    protected $fillable = [
        'profile_id',
        'hobi',
        ];

        public function profile(){
            return $this->belongsTo(Profile::class);
        }
}
