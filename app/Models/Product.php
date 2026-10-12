<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class Product extends Model {
    protected $fillable = ['category_id','name','brand','daily_rate','deposit','stock','description'];
    protected function casts(): array { return ['daily_rate'=>'decimal:2','deposit'=>'decimal:2']; }
    public function category(): BelongsTo { return $this->belongsTo(Category::class); }
}
