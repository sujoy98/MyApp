<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* These values are all set by default, dosen't need to mention here unless
    we want to change in something */
    // Table Name
    protected $table = 'posts';
    // Primary Key which is in database
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
    /*
        CREATING A MODEL RELATIONSHIP:-
        a Post has a relation with a user and it belongs to a user
    */
    public function user(){
        return $this->belongsTo('App\User');
    }
}
