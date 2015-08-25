<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'stores';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = [];
}
