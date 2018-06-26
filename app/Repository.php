<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon as Carbon;

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
    // 'repo_created_at',
    // 'repo_updated_at',
    // 'repo_pushed_at',
    'created_at',
    'updated_at'
  ];

  // /**
  //  * Get the repository's created at date
  //  *
  //  * @param  string $value
  //  * @return string
  //  */
  // public function getRepoCreatedAtAttribute()
  // {
  //   \Carbon::setLocale('mx');
  //   \Carbon::setUtf8(true);
  //   return \Carbon::createFromDate($this->repo_created_at);
  // }
  //
  // /**
  //  * Get the repository's updated at date
  //  *
  //  * @param  string $value
  //  * @return string
  //  */
  // public function getRepoUpdatedAtAttribute()
  // {
  //   \Carbon::setLocale('mx');
  //   \Carbon::setUtf8(true);
  //   return \Carbon::createFromDate($this->repo_updated_at);
  // }
  //
  // /**
  //  * Get the repository's pushed at date
  //  *
  //  * @param  string $value
  //  * @return string
  //  */
  // public function getRepoPushedAtAttribute()
  // {
  //   \Carbon::setLocale('mx');
  //   \Carbon::setUtf8(true);
  //   return \Carbon::createFromDate($this->reprepo_pushed_at);
  // }
}
