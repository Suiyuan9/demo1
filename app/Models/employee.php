<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Laravel\Scout\Searchable;

class Employee extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'userGroup',
        'image',
        'contact',
        'address',
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
        'contact'=>'nullable|string|max:55',
        'address'=>'required|string|max:255',
    ];


    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'userGroup' =>$this->userGroup,
            'address'=>$this->address,
            'contact'=>$this->contact
        ];
    }
}
