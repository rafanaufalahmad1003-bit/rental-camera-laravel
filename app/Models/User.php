<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model {protected $fillable=['name','username','password_hash','role'];protected $hidden=['password_hash'];}
