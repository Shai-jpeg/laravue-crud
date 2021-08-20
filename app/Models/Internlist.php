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

    public function scopeSearch($query,$term)
    {
        $term = "%$term%";

        $query->where(function($query) use ($term){
            $query->where('last_name', 'like', $term)
            ->orWhere('first_name', 'like', $term)
            ->orWhere('department', 'like', $term)
            ->orWhere('position', 'like', $term)
            ->orWhere('intern_start', 'like', $term)
            ->orWhere('intern_end', 'like', $term);


        });
    }

}
