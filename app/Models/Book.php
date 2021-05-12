<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Book extends Model
{
    use HasFactory;

    public function author(){
        return $this->belongsTo(Author::class);
        // return $this->belongsTo('App/Models/Author', 'author_id', 'id');
    }

}
