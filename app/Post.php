<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /* These values are all set by default
    we can change by this variables here */
    // Table Name
    protected $table = 'posts';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;
}
