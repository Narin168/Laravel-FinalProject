<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $fillable = [
        'phonenumber', 'user_id', 'service_id','name','description','imgurl'
    ];
    public function users(){
        return $this->belongsTo(User::class,foreignKey:'user_id');
    }
}
