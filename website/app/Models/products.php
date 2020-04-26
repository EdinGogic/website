<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class products
 * @package App\Models
 * @version April 25, 2020, 7:35 pm UTC
 *
 * @property string $CategoryID
 * @property string $Model
 * @property integer $Quantity
 * @property string $Image
 * @property integer $Price
 * @property string $Weight
 */
class products extends Model
{

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'CategoryID',
        'Model',
        'Quantity',
        'Image',
        'Price',
        'Weight'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ProductID' => 'integer',
        'CategoryID' => 'string',
        'Model' => 'string',
        'Quantity' => 'integer',
        'Image' => 'string',
        'Price' => 'integer',
        'Weight' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
