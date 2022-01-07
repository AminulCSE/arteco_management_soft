<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Employee extends Model
{

    use Notifiable;
    protected $fillable = [
        'name', 'phone', 'position', 'salary', 'image', 'email', 'address','start_date',
    ];
}
