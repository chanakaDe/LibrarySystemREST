<?php
/**
 * Created by PhpStorm.
 * User: chanaka
 * Date: 4/11/16
 * Time: 2:19 PM
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{

    protected $fillable =
        [
            'checkin_id',
            'book_id',
            'user_id',
            'charge'
        ];

}

?>