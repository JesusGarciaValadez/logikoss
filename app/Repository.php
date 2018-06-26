<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon as Carbon;

class Repository extends Model
{
  /**
   * Indicates if the model should be timestamped.
   *
   * @var bool
   */
  public $timestamps = true;

  /**
   * The table associated with the model.
   *
   * @var string
   */
  protected $table = 'repositories';

  /**
   * The attributes that aren't mass assignable.
   *
   * @var array
   */
  protected $guarded = [ "id", "created_at", "updated_at" ];

  /**
   * The attributes that should be mutated to dates.
   *
   * @var array
   */
  protected $dates = [
    'repo_created_at',
    'repo_updated_at',
    'repo_pushed_at',
    'created_at',
    'updated_at'
  ];

  /**
   * Get the repository's created at date
   *
   * @param  string $value
   * @return string
   */
  public function setRepoCreatedAtAttribute($value)
  {
    $this->attributes['repo_created_at'] = Carbon::parse($value)->toDateTimeString();
  }

  /**
   * Get the repository's updated at date
   *
   * @param  string $value
   * @return string
   */
  public function setRepoUpdatedAtAttribute($value)
  {
    $this->attributes['repo_updated_at'] = Carbon::parse($value)->toDateTimeString();
  }

  /**
   * Get the repository's pushed at date
   *
   * @param  string $value
   * @return string
   */
  public function setRepoPushedAtAttribute($value)
  {
    $this->attributes['repo_pushed_at'] = Carbon::parse($value)->toDateTimeString();
  }
}
