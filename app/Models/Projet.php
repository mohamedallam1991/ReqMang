<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    public $table = 'projects';



    protected $fillable = [
        'title',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
