<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'description',
        'image',
        'user_id',
    ];
    public $timestamps = true;
    public function user(){
        return $this->belongsTo( User::class,'user_id');
    }
}
