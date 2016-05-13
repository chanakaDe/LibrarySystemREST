<?php
/**
 * Created by PhpStorm.
 * User: chanaka
 * Date: 5/13/16
 * Time: 7:58 PM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkin extends Model
{

    protected $fillable = [
        'checkout_id',
        'book_id',
        'user_id',
        'checkout_date',
        'due_date',
        'handed_date',
        'late_charges',
        'note'
    ];

}

?>