<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $fillable = [
        'employee_id', 'att_date', 'att_year', 'edit_date', 'att_month','overtime', 'hourly_duty', 'attendence', 'status',
    ];
}