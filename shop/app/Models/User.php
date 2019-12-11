<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class User extends Model
{
    public $table="user";

    public function add($data){
        $this->username = $data['username'];
        $this->password = $data['password'];
        $this->email = $data['email'];
        $this->sex = $data['sex'];
        $this->birth = $data['birth'];
        return $this->save();
    }
}
