<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class welcomeModel extends Model
{
    protected $table = 'welcome';
    protected $fillable = ['Title', 'Content'];
}
