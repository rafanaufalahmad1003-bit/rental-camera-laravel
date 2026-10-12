<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
class Equipment extends Model {
 protected $fillable=['category_id','sku','brand','model','daily_rate','deposit_amount','description','active'];
 protected function casts(): array{return ['daily_rate'=>'decimal:2','deposit_amount'=>'decimal:2','active'=>'boolean'];}
 public function category():BelongsTo{return $this->belongsTo(Category::class);}
 public function units():HasMany{return $this->hasMany(EquipmentUnit::class);}
 public function suppliers():BelongsToMany{return $this->belongsToMany(Supplier::class,'equipment_suppliers')->withPivot('supplier_price');}
}

