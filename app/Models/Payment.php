<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Payment extends Model {protected $fillable=['rental_id','received_by','payment_type','amount','method','paid_at','note'];protected function casts():array{return ['paid_at'=>'datetime','amount'=>'decimal:2'];}public function rental():\Illuminate\Database\Eloquent\Relations\BelongsTo{return $this->belongsTo(Rental::class);}}
