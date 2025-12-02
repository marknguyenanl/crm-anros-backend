<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
* Class Lead
*
* @property string $name
* @property string $tel
* @property string $email
* @property string $source
* @property string $address
* @property Carbon|null $created_at
* @property Carbon|null $updated_at
**/
class Lead extends Model
{
    protected $table = 'leads';

    protected $fillable = [
        'name',
        'tel',
        'email',
        'source',
        'address',
    ];
}
