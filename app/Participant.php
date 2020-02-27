<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Participant extends Model
{
    use SoftDeletingTrait;

    protected $guarded = [];
}
