<?php
/**
 * Created by PhpStorm.
 * User: MJA
 * Date: 26.05.2015
 * Time: 22:02
 */

namespace kurma\models;

use Illuminate\Database\Eloquent\Model as Model;

class Users extends Model{

    protected $table = "users";
    protected $primaryKey  = "id_user";
} 