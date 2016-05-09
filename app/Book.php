<?php
/**
 * Created by PhpStorm.
 * User: chanaka
 * Date: 4/11/16
 * Time: 2:19 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{

    protected $fillable = ['title', 'author', 'isbn'];

}

?>