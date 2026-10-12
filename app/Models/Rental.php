<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Rental extends Model {protected $fillable=['rental_code','customer_id','created_by','start_at','due_at','returned_at','status','subtotal','deposit_total','notes'];protected function casts():array{return ['start_at'=>'datetime','due_at'=>'datetime','returned_at'=>'datetime','subtotal'=>'decimal:2','deposit_total'=>'decimal:2'];}public function customer():BelongsTo{return $this->belongsTo(Customer::class);}public function items():HasMany{return $this->hasMany(RentalItem::class);}public function payments():HasMany{return $this->hasMany(Payment::class);}}
