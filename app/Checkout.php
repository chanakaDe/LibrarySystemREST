<?php
/**
 * Created by PhpStorm.
 * User: chanaka
 * Date: 5/13/16
 * Time: 7:56 PM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{

    protected $fillable =
        [
            'book_id',
            'user_id',
            'checkout_type',
            'due_date',
            'note'
        ];

}

?>