<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WelcomeModel extends Model
{
    protected $table = 'welcome';
    protected $fillable = ['Title', 'Content'];
    public $timestamps = false;
}
