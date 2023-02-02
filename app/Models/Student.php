<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable=[
        'Full_Name', 'User_Name', 'Age','Email', 'Phone_number', 'Address', 'Password','Confirm_Password'
    ];
}
