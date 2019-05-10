<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_post extends Model
{
    protected $table="hotel_posts";
    protected $primaryKey="id";
    public $timestamps=false;
}
