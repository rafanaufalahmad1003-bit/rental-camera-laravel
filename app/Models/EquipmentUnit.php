<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class EquipmentUnit extends Model {protected $fillable=['equipment_id','serial_number','condition_note','status'];public function equipment():BelongsTo{return $this->belongsTo(Equipment::class);}}
