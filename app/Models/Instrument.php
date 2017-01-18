<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $category_id
 * @property string $name
 * @property string $description
 * @property Category $category
 * @property Invoice[] $invoices
 */
class Instrument extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'instrument';
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = ['category_id', 'name', 'description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice');
    }
}
