<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Customer extends Model
{
	use Notifiable;
    protected $fillable = [
        'customer_name', 'phone', 'email', 'address','status',
    ];
}