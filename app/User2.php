<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User2 extends Authenticatable
{
    use Notifiable;
    protected $table = 'users2';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone','email', 'username','id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        "table","fillable",
     "hidden","connection",
     "primaryKey","keyType",
     "incrementing","with",
     "withCount","perPage",
     "exists",
     "wasRecentlyCreated",
     "attributes"
    ];




    static function find_result($name ,$phone = null,$email = null ,$username = null,$id= null){

        $where_array= [];

        if ($name != null)
            $where_array["name"] = $name;

        if ($phone!= null)
            $where_array["phone"] = $phone;

        if ($email!= null)
            $where_array["email"] = $email;
        if ($username!= null)
            $where_array["username"] = $username;

        if ($id!= null)
            $where_array["id"] = $id;

        if (empty($where_array))
            return [];

            $result = User2::where($where_array)->get();

    return $result;
    }



}
