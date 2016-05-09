<?php
/**
 * Created by PhpStorm.
 * User: chanaka
 * Date: 4/12/16
 * Time: 8:44 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'book_id', 'user_id', 'order_type' , 'order_date'
    ];

}
?>