<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ESolution\DBEncryption\Traits\EncryptedAttribute;

class Passwork extends Model
{
    use HasFactory, EncryptedAttribute;

    static $rules = [
      'name' => ['required', 'string', 'max:255'],
      'email' => ['required', 'string', 'email', 'max:255'],  
      'pass' => ['required', 'string'],
      ];
      
    static $mesaje=[
        'name.required'=>'El nombre es requerido',
        'email.required'=>'El email es requerido',
        'pass.required'=>'La contraseña es requerida',
      ];


    protected $fillable = ['name','email','pass','note'];


    protected $encryptable = ['email', 'pass'];
}  
