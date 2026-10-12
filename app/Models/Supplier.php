<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Supplier extends Model {protected $fillable=['name','contact_name','phone','email','address'];public function equipment():BelongsToMany{return $this->belongsToMany(Equipment::class,'equipment_suppliers')->withPivot('supplier_price');}}

