<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'userGroup',
        'image',
    ];

    protected $hidden = [
        'password',
        
    ];
    
    public static $rules=[
        'name' =>'required|string|max:100',
        'email'=>'required|string|max:100',
        'password'=>'required|string|max:100',
        'userGroup'=>'nullable|string|max:100',
        'image'=>'nullable|string|max:100',
    ];
}
