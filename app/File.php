<?php

namespace App;
use Storage;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'files';

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


  public static function boot()
    {
        parent::boot();

        // Attach event handler, on deleting of the user
      
        File::deleting(function($file)
        {
          $exists = Storage::disk('local')->exists($file->path);
          if($exists){
            Storage::delete($file->path);
          }

          });
    }
}
