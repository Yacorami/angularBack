<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $create_time
 * @property Invoice[] $invoices
 */
class User extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'user';
    public $timestamps = false;
    /**
     * @var array
     */
    protected $fillable = ['username', 'email', 'password', 'create_time'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('App\Models\Invoice');
    }
}
