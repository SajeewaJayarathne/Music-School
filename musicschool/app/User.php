<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\Authenticatable;

class User implements Authenticatable
{
    

    public $id;
    public $password;
    public $remember_token;

    public function getAuthIdentifier(){
        return $this -> id;
    }
    
    public function getAuthIdentifierName(){
        return "id";
    }

    public function getAuthPassword(){
        return $this -> password;
    }

    public function getRememberToken(){
        
    }
    
    public function setRememberToken($value){
        
    }

    public function getRememberTokenName(){
        
   }

}
