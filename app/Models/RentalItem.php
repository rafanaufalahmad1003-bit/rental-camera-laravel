<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class RentalItem extends Model {protected $fillable=['rental_id','equipment_unit_id','daily_rate','rental_days','line_total'];public function rental():BelongsTo{return $this->belongsTo(Rental::class);}public function unit():BelongsTo{return $this->belongsTo(EquipmentUnit::class,'equipment_unit_id');}}
