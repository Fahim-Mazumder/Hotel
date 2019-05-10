<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_book extends Model
{
    protected $table="hotel_books";
    protected $primaryKey="id";
    public $timestamps=false;
}
