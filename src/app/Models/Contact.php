<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'name1',
        'name2',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion'
    ];
    public static $rules = array(
    'name1' => 'required','string','max:255',
    'name2' => 'required','string','max:255',
    'gender' =>'required',
    'email' => 'required','string','email','max:255',
    'postcode' => 'required','size:8',
    'address' => 'required','max:255',
    'building_name' => 'max:255',
    'opinion' =>'required',
  );
}