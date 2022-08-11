<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'category_id','description','imgurl'
    ];
    public function categories(){
        return $this->belongsTo(Category::class,foreignKey:'category_id');
    }
}
