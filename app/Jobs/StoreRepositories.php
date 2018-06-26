<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Carbon\Carbon;

use App\Repository as Repository;
use GrahamCampbell\GitHub\Facades\GitHub as Github;

class StoreRepositories implements ShouldQueue
{
  use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

  /**
   * The number of times the job may be attempted.
   *
   * @var int
   */
  public $tries = 1;

  /**
   * Indicates the username of the github account to retrieve info.
   *
   * @var string
   */
  private $_username;

  /**
   * Indicates the type of the github account to retrieve info.
   *
   * @var string
   */
  private $_type;

  /**
   * Indicates how the info account will be sorted.
   *
   * @var string
   */
  private $_sort;

  /**
   * Indicates the direction of how will be sorted the info of the account.
   *
   * @var string
   */
  private $_direction;

  /**
   * Indicates the vibility of the repositories.
   *
   * @var string
   */
  private $_visibility;

  /**
   * Indicates the affiliation of the repositories.
   *
   * @var string
   */
  private $_affiliation;

  /**
   * Collection of repositories saved.
   *
   * @var Repository
   */
  public $repositories;

  /**
   * Create a new job instance.
   *
   * @return void
   */
  public function __construct()
  {
    $this->_username = 'githubtraining';
    $this->_type = 'owner';
    $this->_sort = 'name';
    $this->_direction = 'desc';
    $this->_visibility = 'all';
    $this->_affiliation = null;
  }

  /**
   * Execute the job.
   *
   * @return void
   */
  public function handle()
  {
    $repositories = GitHub::user()
                      ->repositories(
                        $this->_username,
                        $this->_type,
                        $this->_sort,
                        $this->_direction,
                        $this->_visibility,
                        $this->_affiliation
                      );

    foreach ($repositories as $data)
    {
      $repository = Repository::updateOrCreate([
        'node_id' => $data['node_id']
      ], [
        'name' => $data['name'],
        'full_name' => $data['full_name'],
        'html_url' => $data['html_url'],
        'url' => $data['url'],
        'commits_url' => $data['commits_url'],
        'git_commits_url' => $data['git_commits_url'],
        'repo_created_at' => $data['created_at'],
        'repo_updated_at' => $data['updated_at'],
        'repo_pushed_at' => $data['pushed_at'],
      ]);
    }

    $this->repositories = Repository::all();
  }
}
