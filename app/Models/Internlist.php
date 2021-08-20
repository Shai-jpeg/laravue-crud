<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Internlist extends Model
{
    use HasFactory;


    protected $table ='internlist';
    public $timestamps = true;

    protected $fillable =[
        'last_name',
        'first_name',
        'date_of_birth',
        'contact_number',
        'email_address',
        'address',
        'department',
        'position',
        'intern_start',
        'intern_end',
        'required_hours',
    ];


}
