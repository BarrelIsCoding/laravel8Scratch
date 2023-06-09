<?php

namespace App\Models;


use App\Models\Catergory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

   protected $guarded = ['id'];

   protected $with = ['catergory', 'author'];

   // we are about to use Eloquent relationships
   // Post are Eloquent Model so you will connect to Category model
    // We have 4 relationships in Laravel
    // hasOne, hasMany, belongsTo, belongsToMany
    // The post will use belongsTo
   public function catergory(){
        return $this->belongsTo(Catergory::class);
   }

   public function author(){
    return $this->belongsTo(User::class, "user_id");
   }
}


