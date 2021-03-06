<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

	protected $table = 'items';

	public $primaryKey = 'id';



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [        
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $guarded = [
    ];    


    public function category()
    {
        return $this->hasOne('App\ItemCategory', 'id', 'category_id' );
    }

}
